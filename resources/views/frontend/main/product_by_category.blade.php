@extends('frontend.master')
@section('title','Ecommerce Website')
@push('styles')
<style>
	.by-cat-section {
		margin-top: 10px;  
	}

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

    /* Media query for desktop */
    @media only screen and (min-width: 992px) {
        .by-cat-section {
            margin-top: 100px;
        }
    }
</style>
@endpush
@section('content')
		<!-- SECTION -->
		<div class="section by-cat-section">
			<!-- container -->
			<div class="container">

					<div id="store">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->
						<div class="row isotope-grid">

							@foreach($products as $product)
								@php
								$images = explode("|", $product->image);
								$img = $images[0];
								@endphp

								<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ strtolower($product->category->name)  }}">
									<!-- Block2 -->
									<div class="block2">
										<div class="block2-pic hov-img0">
											@if ($img)
												<img src="{{ asset('/image/' . $img) }}" alt="IMG-PRODUCT" class="product-image">
											@else
												<p>No image available</p>
											@endif

											<a href="{{ url('/product-modal/'. $product->id )}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
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

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@endsection