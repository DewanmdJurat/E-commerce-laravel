@extends('FrontEnd.master')

@section('mainContent')
<div class="single-related-products">
		<div class="container">
			<div class="new-collections-grids">
				@foreach($categoryProducts as $categoryProduct)
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">

						<div class="new-collections-grid1-image">
							<a href="{{url('product/details')}}" class="product-image"><img src="{{asset($categoryProduct->productImage)}}" alt=" " class="img-responsive" style="width:300px;height: 350px;"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="{{url('product/details')}}">Quick View</a>
							</div>
							
						</div>
						<h4><a href="{{url('product/details/'.$categoryProduct->id)}}">{{$categoryProduct->productName}}</a></h4>
						<p>{{$categoryProduct->productTitle}}</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p>BDT:<span class="item_price">{{$categoryProduct->productPrice}}</span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				@endforeach

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

@endsection