@extends('Admin.master')
@section('title')
  Manage Manufacturer
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
                            <th>Manufacturer Name</th>
                            <th>Manufacturer Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $id=1 ?>
                      	@foreach($manufacturers as $manufacturer)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$manufacturer->manufacturerName}}</td>
                            <td>{!!$manufacturer->manufacturerDescription!!}</td>
                            <td>
                              <label class="badge badge-info">{{$manufacturer->publicationStatus == 1 ? 'published' : 'unpublished' }}</label>
                            </td>
                            <td>
                            	@if($manufacturer->publicationStatus == 1 )
                              <a href="{{url('manufacturer/unpublished/'.$manufacturer->id)}}" class="btn btn-outline-secondary" title="unpublished"><span><i class="icon-dislike menu-icon"></i></span></a>
                              @else
                              <a href="{{url('manufacturer/published/'.$manufacturer->id)}}" class="btn btn-outline-secondary" title="published"><span><i class="icon-like menu-icon"></i></span></a>
                              @endif
                              <a href="{{url('manufacturer/edit/'.$manufacturer->id)}}" class="btn btn-outline-secondary" title="Edite"><span><i class="icon-pencil menu-icon"></i></span></a>
                              <a href="{{url('manufacturer/delete/'.$manufacturer->id)}}" class="btn btn-outline-secondary" title="Delete"><span><i class=" icon-trash menu-icon"></i></span></a>
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