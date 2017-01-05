@extends('templates.main')

@section('header')
    @parent
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <title>Coalition Technologies Test</title>
@endsection

@section('content')


<div class="panel panel-default">
    <div class="panel-body">
        <form>
            <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token();?>">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" name="productName" id="productName">
                <span class="productNameError text-danger errorContainer"></span>
            </div>
            <div class="form-group">
                <label for="stockQuantity">Quantity in Stock</label>
                <input type="number" class="form-control" name="stockQuantity" id="stockQuantity">
                <span class="stockQuantityError text-danger errorContainer"></span>
            </div>

            <div class="form-group">
                <label for="pricePerItem">Price Per Item</label>
                <input type="number" class="form-control" name="pricePerItem" id="pricePerItem">
                <span class="pricePerItemError text-danger errorContainer"></span>
            </div>

            <div class="btn btn-default" id="submit">Submit</div>
            <div class="server-error errorContainer"></div>
        </form>
    </div>
</div>


<!-- output container -->
<div class="panel panel-default">
    <div class="panel-body">

        <!-- product name -->
        <div class="row">
            <div class="col-lg-3">
                <p>Product Name</p>
            </div>
            <div class="col-lg-6">  
                <p>output</p>
            </div>
        </div>

        <!-- quantity in stock -->
        <div class="row">
            
            <div class="col-lg-3">
                <p>Quantity In Stock</p>
            </div>
            <div class="col-lg-6">
                <p>output</p>
            </div>
        </div>

        <!-- pric per item -->
        <div class="row">
            
            <div class="col-lg-3">
                <p>Price Per Item </p>
            </div>
            <div class="col-lg-6">
                <p>output</p>
            </div>
        </div>

    </div>
</div><!-- ./ end output contaier -->


@endsection