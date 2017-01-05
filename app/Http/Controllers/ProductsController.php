<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Log;

use App\Product;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

	/*
	* List
	*/
	public function list()
	{
		$products = DB::table('products')->get();
		Log::info(var_dump($products));
		// return json_encode($products);
		// return $products;

		return response()->json($products);
	}
    /*
   	* Create 
   	*/
   	public function create(Request $request)
   	{
   		Log::info($request);
   		$valid					= true;
   		// pull out our data
        $product_name 			= $request->product_name;
        $quantity_in_stock 		= $request->quantity_in_stock;
        $price_per_item 		= $request->price_per_item;


        Log::info($product_name );
        Log::info($quantity_in_stock);
        Log::info(  $price_per_item );
        // very simple validation
        if($product_name && $quantity_in_stock && $price_per_item){
        	// try and add this to the database
        	try{
        		Log::info('trying to save');
        		$product = new Product;	
        		$product->product_name = $product_name;
        		$product->quantity_in_stock = $quantity_in_stock;
        		$product->price_per_item = $price_per_item;

        		$saved = $product->save();

        		// return res.status200
                $response = array(
                    'status' => 200,
                    'data' => array(
                        'message' => 'success',
                    )
                );

        	}catch(\Illuminate\Database\QueryException $e){
        		Log::info('Caught exception: '.$e->getMessage());

        		$response = array(
                    'status' => 200, 
                    'data' => array(
                        'errors' => 'Something went catastrophically wrong on the server! BWOOP! BWOOP! BWOOP!',
                        'redirect' => $redirect_url
                    )
                );
        	}
        	Log::info($response);
        	return json_encode($response);

        }else{
        	Log::info('no imfo');
        	 // something went wrong
            // return res.status500
            $response = array(
                'status' => 500, 
                'data' => array(
                    'errors' => 'Something went catastrophically wrong on the server! BWOOP! BWOOP! BWOOP!'
                )
            );

            return json_encode($response);
        }
   	}    
}
