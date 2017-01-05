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
            <div class="server-error errorContainer text-danger"></div>
        </form>
    </div>
</div>


<!-- output container -->
<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <th>Product Name</th>
                <th>Quantity in stock</th> 
                <th>Price Per Item</th>
                <th>Date Time Submitted</th>
                <th>Total Value Number</th>
            </tr>
            <div class="rowHolder"></div>
            <tr>
                <td>Jill</td>
                <td>Smith</td> 
                <td>50</td>
                <td>50</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td> 
                <td>94</td>
                <td>50</td>
                <td>50</td>
            </tr>
        </table>

    </div>
</div><!-- ./ end output contaier -->


@endsection