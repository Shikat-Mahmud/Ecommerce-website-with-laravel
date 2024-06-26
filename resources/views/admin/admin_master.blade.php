<!DOCTYPE html>
<html lang="en">

<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keyword"
		content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: CSS -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
	<link id="bootstrap-style" href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('backend/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet">
	<link
		href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext'
		rel='stylesheet' type='text/css'>
	<!-- end: CSS -->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->

	@stack('styles')
</head>

<body>
	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				@php
					$gs = generalSetting();
				@endphp

				<a class="brand" href="{{ url('/') }}"><span>{{ $gs->business_name }}</span></a>

				@include('admin.menu.header_menu')

			</div>
		</div>
	</div>
	<!-- start: Header -->

	<div class="container-fluid-full">
		<div class="row-fluid">

			@include('admin.menu.main_menu')

			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
						enabled to use this site.</p>
				</div>
			</noscript>

			<!-- start: Content -->
			<div id="content" class="span10">


				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
						<a href="index.html">Home</a>
						<i class="icon-angle-right"></i>
					</li>
					<li><a href="#">Dashboard</a></li>
				</ul>

				@yield('admin_content')


			</div><!--/.fluid-container-->


			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>

	<div class="clearfix"></div>

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a
					href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap
					Metro Dashboard</a></span>

		</p>

	</footer>

	<!-- start: JavaScript-->

	<script src="{{ asset('backend/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('backend/js/jquery-migrate-1.0.0.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery-ui-1.10.0.custom.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.ui.touch-punch.js') }}"></script>

	<script src="{{ asset('backend/js/modernizr.js') }}"></script>

	<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.cookie.js') }}"></script>

	<script src="{{ asset('backend/js/fullcalendar.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>

	<script src="{{ asset('backend/js/excanvas.js') }}"></script>
	<script src="{{ asset('backend/js/jquery.flot.js') }}"></script>
	<script src="{{ asset('backend/js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('backend/js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('backend/js/jquery.flot.resize.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.chosen.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.uniform.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.cleditor.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.noty.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.elfinder.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.raty.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.iphone.toggle.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.uploadify-3.1.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.gritter.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.imagesloaded.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.masonry.min.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.knob.modified.js') }}"></script>

	<script src="{{ asset('backend/js/jquery.sparkline.min.js') }}"></script>

	<script src="{{ asset('backend/js/counter.js') }}"></script>

	<script src="{{ asset('backend/js/retina.js') }}"></script>

	<script src="{{ asset('backend/js/custom.js') }}"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

	@stack('scripts')

	<!-- end: JavaScript-->

</body>

</html>