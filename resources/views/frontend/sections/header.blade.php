<!-- Header -->
<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="{{ route('faq') }}" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						@if(auth()->check())
						<a href="{{ route('profile') }}" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<form class="flex-c-m trans-04 p-lr-25" method="POST" action="{{ route('logout') }}">
							@csrf
							<button type="submit" class="dropdown-item" style="background-color: #E4E1DA;">Logout</button>
						</form>
						@else
						<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
						@endif

						<!-- <a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							BDT
						</a> -->
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					@php
						$gs = generalSetting();
					@endphp
					<!-- Logo desktop -->		
					<a href="{{url('/')}}" class="logo" style="color: #333333;">
						<img src="{{ asset('storage/' . $gs->logo) }}" alt="IMG-LOGO">
						<!-- <h2>StyleSync</h2> -->
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="{{ Request::is('/') ? 'active-menu' : '' }}">
								<a href="{{url('/')}}">Home</a>
							</li>

							@foreach($categories as $category)
							<li class="{{ Request::is('product_by_category/' . $category->id) ? 'active-menu' : '' }}">
								<a href="{{ url('product_by_category/' . $category->id) }}">{{ $category->name }}</a>
							</li>
							@endforeach

							<li class="{{ Request::is('about') ? 'active-menu' : '' }}">
								<a href="{{ url('/about') }}">About</a>
							</li>

							<li class="{{ Request::is('contact') ? 'active-menu' : '' }}">
								<a href="{{ url('/contact') }}">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="{{url('/')}}"><img src="{{ asset('/') }}frontend/images/icons/logo-01.png"  alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="{{ route('faq') }}" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						@if(auth()->check())
						<a href="{{ route('profile') }}" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<form class="flex-c-m trans-04 p-lr-25" method="POST" action="{{ route('logout') }}">
							@csrf
							<button type="submit" class="dropdown-item" style="background-color: #E4E1DA;">Logout</button>
						</form>
						@else
						<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25">
							Login
						</a>
						@endif

						<!-- <a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							BDT
						</a> -->
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>

				@foreach($categories as $category)
				<li>
					<a href="{{ url('product_by_category/' . $category->id) }}">{{ $category->name }}</a>
				</li>
				@endforeach

				<li>
					<a href="{{ url('/about') }}">About</a>
				</li>

				<li>
					<a href="{{ url('/contact') }}">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="{{ asset('/') }}frontend/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
    