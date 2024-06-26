<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('/') }}frontend/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/main.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/css/font-awesome.min.css">
<!--===============================================================================================-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	{{-- toaster --}}
	<link rel="stylesheet" href="{{ asset('frontend/css/toastr.min.css') }}">

	@stack('styles')
</head>


<body>
	

<!-- Main Wrapper -->
<div class="main-wrapper">
            @include('frontend.sections.header')
            @include('frontend.sections.side-cart')
            @yield('content')
            @include('frontend.sections.footer')
        </div>	
<!-- /Main Wrapper -->

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

    <!-- Modal1 -->
    @include('frontend.sections.modal')

<!--===============================================================================================-->	
<script src="{{ asset('/') }}frontend/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('/') }}frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ asset('/') }}frontend/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/slick/slick.min.js"></script>
	<script src="{{ asset('/') }}frontend/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}frontend/js/main.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- Toastr JS -->
<script src="{{ asset('frontend/js/toastr.min.js') }}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "maxOpened": 3
    };

    @if (Session:: has('success'))
    toastr.success("{{ Session::get('success') }}");
    @elseif(Session:: has('error'))
    toastr.error("{{ Session::get('error') }}");
    @elseif(Session:: has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @elseif(Session:: has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif
</script>

<script>
$(document).ready(function(){
    $('.quick_view_modal').on('click', function(e){
        e.preventDefault();
        var product_id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: "{{ route('product.modal', '') }}" + '/' + product_id,
            success: function(data){
                // Insert the data into a separate container within the modal
                $('.js-modal1').html(data);
                
                // Show the modal
                $('.js-modal1').addClass('show-modal1');
            },
            error: function(error){
                console.log(error);
            }
        });
    });

    // Event listener for close button
    $(document).on('click', '.js-hide-modal1', function(e){
        e.preventDefault();
		
        // Hide the modal
        $('.js-modal1').removeClass('show-modal1');
    });
});

</script>

@stack('scripts')

</body>
</html>