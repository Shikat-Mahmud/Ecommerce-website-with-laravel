@extends('frontend.master')
@section('title','FAQs')

@section('content')

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('/') }}frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			FAQs
		</h2>
	</section>	

	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							FAQs
						</h3>

						@foreach ($faqs as $faq)
						<div class="m-b-30">
							<div class="stext-113 cl6 p-b-10">
								<h6>{{ $faq->question }}</h6>
							</div>
							
							<div class="bor16 p-l-29">
								<p class="cl6 p-r-40 p-t-5 p-b-5">
									{{ strip_tags($faq->answer) }}
								</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
						@if (isset($about->image))
							<img src="{{ asset('storage/' . $faq->image) }}" alt="IMG">
							@else
							<img src="{{ asset('/') }}frontend/images/about-02.jpg" alt="IMG">
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
@endsection 