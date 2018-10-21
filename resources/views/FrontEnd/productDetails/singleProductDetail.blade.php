@extends('FrontEnd.master')

@section('mainContent')
	<div class="single">
		<div class="container">
			<div class="col-md-2 products-left">
			</div>
			<div class="col-md-8 single-right">
				
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{asset($singleProductDetail->productImage)}}">
								<div class="thumb-image"> <img src="{{asset($singleProductDetail->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="{{asset($singleProductDetail->productImage)}}">
							   <div class="thumb-image"> <img src="{{asset($singleProductDetail->productImage)}}" data-imagezoom="true" class="img-responsive"> </div>
							</li> 
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="{{asset('public/FrontEnd/')}}/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="{{asset('public/FrontEnd/')}}/css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h3>{{$singleProductDetail->productName}}</h3>
					
					<div class="description">
						<h5><i>Description</i></h5>
						<p>{{$singleProductDetail->productShortDescription}}</p>
					</div>
					
					<h4><span class="item_price"> BDT {{$singleProductDetail->productPrice}}</span></h4><form action="{{url('add/to/cart')}}" method="POST">
						{{ csrf_field() }}
					<div class="color-quality">
						<div class="color-quality-left">
							<h5>Quality :</h5>
							<input type="number" name="qty" value="1" style="width: 60px;padding: 3px 5px">
							<input type="hidden" name="productId" value="{{$singleProductDetail->id}}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasional">
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<button class=" btn item_add cart btn-default" type="submit">add to cart </button> 
					</div>
					</form>

					<div class="social">
						<div class="social-left">
							<p>Share On :</p>
						</div>
						<div class="social-right">
							<ul class="social-icons">
								<li><a href="https://www.facebook.com" class="facebook"></a></li>
								<li><a href="https://www.twitter.com" class="twitter"></a></li>
								<li><a href="https://www.plus.google..com" class="g"></a></li>
								<li><a href="https://www.instagram.com" class="instagram"></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>{!!asset($singleProductDetail->productLongDescription)!!}</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	
@endsection