	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">e-shop@info.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						
						@php 
							$customerId=Session::get('customerId');
                      		$shippingId=Session::get('shippingId');
                 		@endphp
				  
					@if($customerId != NULL)
						<li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="{{url('customer/logout')}}">Logout</a></li>
					@else
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{url('login/form')}}">Login</a></li>
					@endif
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com" class="facebook"></a></li>
						<li><a href="https://www.twitter.com" class="twitter"></a></li>
						<li><a href="https://www.plus.google..com" class="g"></a></li>
						<li><a href="https://www.instagram.com" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			