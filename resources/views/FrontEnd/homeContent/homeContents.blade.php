@extends('FrontEnd.master')

@section('mainContent')
<!-- banner -->
@include('FrontEnd.include.banner')
<!-- //banner -->

<!-- collections -->
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Products</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s"></p>
			<div class="new-collections-grids">
				
				@foreach($FrontEndProducts as $FrontEndProduct)
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">

						<div class="new-collections-grid1-image">
							<a href="{{url('product/details/'.$FrontEndProduct->id)}}" class="product-image"><img src="{{asset($FrontEndProduct->productImage)}}" alt=" " class="img-responsive" style="width:300px;height: 350px;"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="{{url('product/details/'.$FrontEndProduct->id)}}">Quick View</a>
							</div>
							
						</div>
						<h4><a href="{{url('product/details/'.$FrontEndProduct->id)}}">{{$FrontEndProduct->productName}}</a></h4>
						<p>{{$FrontEndProduct->productTitle}}</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p>BDT:<span class="item_price">{{$FrontEndProduct->productPrice}}</span><a class="item_add" href="{{url('product/details/'.$FrontEndProduct->id)}}">add to cart </a></p>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //collections -->

@endsection
