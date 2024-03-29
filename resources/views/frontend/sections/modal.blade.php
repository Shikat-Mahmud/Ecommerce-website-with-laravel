	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{ asset('/') }}frontend/images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								@php
								$images = explode("|", $product->image);
								@endphp

								<div class="slick3 gallery-lb">
								@foreach($images as $img)
									<div class="item-slick3" data-thumb="{{ asset('/image/' . $img) }}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('/image/' . $img) }}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('/image/' . $img) }}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								@endforeach
							</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{ $product->name }}
							</h4>

							<span class="mtext-106 cl2">
							&#2547;{{ $product->price }}
							</span>

							<!-- <p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p> -->
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												@foreach(json_decode($product->size->size) as $size)
												<option>{{ $size }}</option>
												@endforeach
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												@foreach(json_decode($product->color->color) as $color)
												<option>{{ $color }}</option>
												@endforeach
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-t-40 respon7" style="justify-content: center;">
								<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail m-b-10 m-r-10">
									Add to cart
								</button>

								<button href="#" class="flex-c-m cl3 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail hov-cl1 p-lr-15 size-101 bor1 m-b-10 m-r-10" style="background: #F7F7F7;">
									<i class="zmdi zmdi-favorite p-r-3"></i>Add to Wishlist
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>