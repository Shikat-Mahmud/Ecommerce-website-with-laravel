@extends('frontend.master')
@section('title','About')

@section('content')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('/') }}frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							{{ $about->title }}
						</h3>

						<p class="stext-113 cl6 p-b-26">
							{{ $about->description }}
						</p>

					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							@if (isset($about->image))
							<img src="{{ asset('storage/' . $about->image) }}" alt="IMG">
							@else
							<img src="{{ asset('/') }}frontend/images/about-01.jpg" alt="IMG">
							@endif
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>	
@endsection 