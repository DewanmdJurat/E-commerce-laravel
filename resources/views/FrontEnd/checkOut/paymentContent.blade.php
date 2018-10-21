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
<!-- register -->
	<div class="checkout">
		<div class="container">
			<div class="form-middle">
			<p class="animated wow zoomIn" data-wow-delay=".5s"style="margin-bottom: 20px">paymen method you want to choose</p>
			
			<div class="checkout-form-grids">
				<h2 class="animated wow slideInUp" data-wow-delay=".5s" style="margin-bottom: 50px">Payment method</h2>
				<form  action="{{url('checkout/save-order')}}" method="post" class="animated wow slideInUp" data-wow-delay=".5s">
					{{csrf_field()}}
					<label><input type="radio" value="cashOnDelivery" name="paymentType" required=" " > Cash On Delivery
					</label>
					<label><input type="radio" value="bkash" name="paymentType" required=" " > Bkash</label>
					<label><input type="radio" value="paypal" name="paymentType" required=" " > Paypal
					</label>
					<input type="submit" value="Done">
				</form>
			</div>
			</div>
		</div>
	</div>


<!-- //checkout -->
<style type="text/css">
.checkout label{
	display: block;
	margin-bottom: 20px;
}
	.checkout {
    width: 100%;
}
.form-middle{
	width:50%;
	margin: auto;
}
.checkout-form-grids input[type='text'], input[type='email'], input[type='submit'] {
    display:block;
    margin: 1em 0 0;
    padding: 6px 10px;
    font-size: 16px;
    width:80%;
    border-radius: 4px;
    outline: none;
}

</style>

@endsection