<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="{{url('/')}}">E-shop <span>E-commerce</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{url('/')}}" class="act">Home</a></li>	
							<!-- Mega Menu -->
							@foreach($publishedCategories as $publishedCategory)
							<li>

								<a href="{{url('/category_menu/'.$publishedCategory->id)}}" >{{$publishedCategory->categoryName}}</a>
								
							</li>
							
							@endforeach
						</ul>
					</div>
					</nav>
				</div>
				
				<div class="header-right">
					<div class="cart box_1">
						<a href="{{url('show/cart')}}">
							<h3> <div class="">
								
								<img src="{{asset('public/FrontEnd/images/bag.png')}}" alt="" />
							</h3>
						</a>
						<p><a href="{{url('show/cart')}}" class="simpleCart_empty">Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>