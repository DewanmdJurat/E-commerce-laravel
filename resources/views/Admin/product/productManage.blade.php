@extends('Admin.master')
@section('title')
  Manage Manufacturer
@endsection

@section('mainContent')
<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <p class="alert-success">{{Session::get('message')}}</p>
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Product Name</th>
                            <th>Product title</th>
                            <th>Product Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $id=1 ?>
                      	@foreach($products as $product)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$product->productName}}</td>
                            <td>{!!$product->productTitle!!}</td>
                            <td><img src="{{asset($product->productImage)}}" style="width: 150px;height:100px; border-radius:unset;"></td>
                            <td>
                              <label class="badge badge-info">{{$product->publicationStatus == 1 ? 'published' : 'unpublished' }}</label>
                            </td>
                            <td>
                            	@if($product->publicationStatus == 1 )
                              <a href="{{url('product/unpublished/'.$product->id)}}" class="btn btn-outline-secondary" title="unpublished"><span><i class="icon-dislike menu-icon"></i></span></a>
                              @else
                              <a href="{{url('product/published/'.$product->id)}}" class="btn btn-outline-secondary" title="published"><span><i class="icon-like menu-icon"></i></span></a>
                              @endif
                              <a href="{{url('product/view/'.$product->id)}}" class="btn btn-outline-secondary" title="View"><span><i class="icon-eye menu-icon"></i></span></a>
                              <a href="{{url('product/edit/'.$product->id)}}" class="btn btn-outline-secondary" title="Edite"><span><i class=" icon-pencil menu-icon"></i></span></a>
                              <a href="{{url('product/delete/'.$product->id)}}" class="btn btn-outline-secondary" title="Delete"><span><i class=" icon-trash menu-icon"></i></span></a>
                            </td>
                        </tr>
                        @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>              
@endsection