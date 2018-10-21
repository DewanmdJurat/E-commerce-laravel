@extends('Admin.master')
@section('title')
  Manage Category
@endsection

@section('mainContent')
<div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Order #</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $id=1 ?>
                      	@foreach($categories as $category)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$category->categoryName}}</td>
                            <td>{!!$category->categoryDescription!!}</td>
                            <td>
                              <label class="badge badge-info">{{$category->publicationStatus == 1 ? 'published' : 'unpublished' }}</label>
                            </td>
                            <td>
                            	@if($category->publicationStatus == 1 )
                              <a href="{{url('category/unpublished/'.$category->id)}}" class="btn btn-outline-secondary" title="unpublished"><span><i class="icon-dislike menu-icon"></i></span></a>
                              @else
                              <a href="{{url('category/published/'.$category->id)}}" class="btn btn-outline-secondary" title="published"><span><i class="icon-like menu-icon"></i></span></a>
                              @endif
                              <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-outline-secondary" title="Edite"><span><i class="icon-pencil menu-icon"></i></span></a>
                              <a href="{{url('category/delete/'.$category->id)}}" class="btn btn-outline-secondary" title="Delete"><span><i class=" icon-trash menu-icon"></i></span></a>
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