@extends('FrontEnd.master')

@section('mainContent')
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			@if($contents==Null)
			<p>Please add your product </p>
			<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
			@else
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Your shopping cart contains Products</span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Total</th>
							<th>Remove</th>
						</tr>
					</thead>
					@foreach($contents as $content)
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="single.html"><img src="{{asset($content->options->image)}}" alt=" " class="img-responsive" style="width: 200px;" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">
									<form action="{{url('quantity/update')}}" method="post">
										{{ csrf_field() }}
									<input type="number" name="qty"
									class="entry value" value="{{$content->qty}}"style="width:50px;">	
									<input type="hidden" name="rowId" value="{{$content->rowId}}">
									<input type="submit" name="submit" class="btn btn-default " value="Update">
									</form>
								</div>
							</div>
						</td> 
						<td class="invert">{{$content->name}}</td>
						
						<td class="invert">{{$content->price}}</td>
						<td class="invert">{{$content->total}}</td>
						<td class="invert">
							<div class="rem">
								<a href="{{url('cart/single/delete/'.$content->rowId)}}" class="close1"></a>
							</div>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Continue to basket</h4>
					<ul>
						<li>Cart Sub Total <i>-</i> <span>BDT:{{Cart::subtotal()}} </span></li>
						<li>Eco Tax <i>-</i> <span>BDT:{{Cart::tax()}} </span></li>
						<li>Service Charges <i>-</i> <span>Free</span></li>
						<li>Total <i>-</i> <span>BDT:{{Cart::total()}} </span></li>
						
					</ul>
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					@php 
					$customerId=Session::get('customerId');
					$shippingId=Session::get('shippingId');
					@endphp
					@if($customerId!=NULL && $shippingId!=NULL)
					<a href="{{url('checkout/payment')}}"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>Check Out </a>
					@elseif($customerId!=NULL && $shippingId==NULL)
					<a href="{{url('checkout/shipping')}}"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>Check Out </a>
					@else
					<a href="{{url('checkout')}}"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span>Check Out </a>
					@endif
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			

			@endif
		</div>
	</div>
<!-- //checkout -->

@endsection