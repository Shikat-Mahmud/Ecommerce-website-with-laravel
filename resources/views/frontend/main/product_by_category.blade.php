@extends('frontend.master')
@section('title','Ecommerce Website')
@push('styles')
<style>
	.category-image {
    width: 300px; 
    height: 200px; 
    object-fit: cover; 
	}
	
	.product-image {
	    width: 200px; 
	    height: 300px; 
	    object-fit: cover; 
	}
</style>
@endpush
@section('content')

<div class="product-main">
	<div class="container" style="padding-top: 40px;">
	<!-- Product -->
		<div class="bg0 m-t-23 p-b-140">
			<div class="container">
				<div class="row isotope-grid p-t-40">

					@foreach($products as $product)
						@php
						$images = explode("|", $product->image);
						$img = $images[0];
						@endphp

						<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ strtolower($product->category->name) }}">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-pic hov-img0">
									@if ($img)
										<img src="{{ asset('/image/' . $img) }}" alt="IMG-PRODUCT" class="product-image">
									@else
										<p>No image available</p>
									@endif

									<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 quick_view_modal" data-id="{{ $product->id }}">
										Quick View
									</a>
								</div>

								<div class="block2-txt flex-w flex-t p-t-14">
									<div class="block2-txt-child1 flex-col-l ">
										<a href="{{ url('/product-detail/'. $product->id )}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
											{{ $product->name }}
										</a>

										<span class="stext-105 cl3">
											&#2547;{{ $product->price }}
										</span>
									</div>

									<div class="block2-txt-child2 flex-r p-t-3">
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
											<img class="icon-heart1 dis-block trans-04" src="{{ asset('/') }}frontend/images/icons/icon-heart-01.png" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('/') }}frontend/images/icons/icon-heart-02.png" alt="ICON">
										</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>

				<!-- Load more -->
				<div class="flex-c-m flex-w w-full p-t-45">
					<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
						Load More
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection