<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Log;

use app\Product;

class ProductsController extends Controller
{
       	/*
   	* Create 
   	*/
   	public function create(Request $request)
   	{
   		Log::info(var_dump($request));



   	}    
}
