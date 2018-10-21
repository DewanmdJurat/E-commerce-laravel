@extends('Admin.master')

@section('mainContent')
<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
<table class="table table-bordered table-hover"> 
    <tr> 
        <th>Product Id</th>
        <th>{{ $product->id }}</th>
    </tr>
    <tr> 
        <th>Product Name</th>
        <th>{{$product->productName}}</th>
    </tr>
    <tr> 
        <th>Manufacturer Name</th>
        <th>{{$product->categoryName}}</th>
    </tr>
    <tr> 
        <th>Category Name</th>
        <th>{{$product->manufacturerName}}</th>
    </tr>
    <tr> 
        <th>Product Price</th>
        <th>{{$product->productPrice}}</th>
    </tr>
    <tr> 
        <th>Product Quantity</th>
        <th>{{$product->productQuantity}}</th>
    </tr>
    <tr> 
        <th>Product Short Description</th>
        <th>{!!$product->productShortDescription!!}</th>
    </tr>
    <tr> 
        <th>Product Long Description</th>
        <th>{!!$product->productLongDescription!!}</th>
    </tr>
    <tr> 
        <th>Product Image</th>
        <th><img src="{{asset($product->productImage)}}" alt="{{$product->productImage}}" style="width:300px !important; height: 200px; border-radius:unset;" /></th>
    </tr>
    <tr> 
        <th>Publication Status </th>
        <th>{{$product->publicationStatus==1?'published':'unpublished'}}</th>
    </tr>
</table>
<a href="{{url('product/manage')}}" type="submit" class="btn btn-success mr-2">Manage Page</a>
</div>
</div>
</div>

@endsection