@extends('Admin.master')
@section('title')
 Orders Details
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
                            <th>customer name</th>
                            <th>Order total</th>
                            <th>Order Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php $id=1 ?>
                      	@foreach($orderInfo as $orderInfo)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$orderInfo->customerName}}</td>
                            <td>{{$orderInfo->orderTotal}}</td>
                            <td>{{$orderInfo->orderStatus}}</td>
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