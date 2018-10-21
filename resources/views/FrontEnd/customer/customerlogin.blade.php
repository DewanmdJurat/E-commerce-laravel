@extends('FrontEnd.master')
@section('mainContent')
<div class="customer-info coll-md-12">
	<div class="row">
		<div class="container">
<!-- register -->
	<div class="customer-register">
	<div class="register">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Registation Form</h3>
	
			<p class="est animated wow zoomIn" data-wow-delay=".5s">You have to login to complete your valuable order.If you are not register then please login first</p>
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">Shopping From</h5>
				<form  action="{{url('sign/up')}}" method="post" class="animated wow slideInUp" data-wow-delay=".5s">
					{{csrf_field()}}
					<input type="text" placeholder="Full Name..." required=" " name="customerName">
					<input type="email" placeholder="Email Address" name="customerEmail" required=" " >
					<input type="text" placeholder="phone Number..." name="mobileNumber" required=" " maxlength="11">
					<textarea name="address" rows="4" required=""></textarea>
					<input type="password" placeholder="Password" required=" "  name="password">
					
					<input type="submit" value="Register">
				</form>
			</div>
		</div>
	</div>
<!-- //register -->
<div class="customer-login">
<div class="login ">
		
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
				<p style="color:00ff00">{{ Session::get('message')}}</p>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="{{url('sign/in')}}" method="post">
					{{csrf_field()}}
					<input type="email" placeholder="Email Address" name="customerEmail" required=" " >
					<input type="password" placeholder="Password" name="password" required=" " >
					
					<input type="submit" value="Login">
				</form>
			</div>
			
		
	</div></div>
	</div>
</div>
<style type="text/css">
	.customer-info{
		width:100%;
	}
	.customer-register{
		width: 50%;
		float:left;
		overflow: hidden;
	}
	.register{
		width: 100%;
	}
	.customer-login{
		width: 50%;
		float: righ;
		overflow: hidden;
	}
.login-form-grids{
	width: 90%;
}
.login-form-grids input[type="text"]{
	margin-top:10px;
}
.login-form-grids textarea{
	width: 100%;
	margin-top:10px;
}
.login h3::before ,h3::after{
display: none;
}
.register h3::before ,h3::after{
display: none;
}
</style>
@endsection