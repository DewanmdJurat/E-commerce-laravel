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
			<p class="animated wow zoomIn" data-wow-delay=".5s"style="margin-bottom: 20px">Hello <b >{{ $customerById->customerName}} </b>you have to give product shipping information to compleate you valuable order. if your product billing information & shipping information are same then just pres on save shipping info button</p>
			
			<div class="checkout-form-grids">
				<h2 class="animated wow slideInUp" data-wow-delay=".5s">Shipping Form</h2>
				<form  action="{{url('save/shipping/details')}}" method="post" class="animated wow slideInUp" data-wow-delay=".5s">
					{{csrf_field()}}
					<input type="text" value="{{$customerById->customerName}}" name="fullName" required=" " >
					<input type="email"  value="{{$customerById->customerEmail}}" required=" " name="emailAddress">
					<input type="text" value="{{$customerById->mobileNumber}}" name="mobileNumber" required=" " maxlength="11">
					<input type="text" value="{{$customerById->address}}" name="address" required=" " >
					<input type="submit" value="Done">
				</form>
			</div>
			</div>
		</div>
	</div>
<!-- //checkout -->
<style type="text/css">

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