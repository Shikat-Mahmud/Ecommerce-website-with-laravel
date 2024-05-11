@extends('frontend.master')
@section('content')
<section style="background-color: #EEEEEE;">
  <div class="container py-5">

    <div class="row py-lg-5 py-0 mt-lg-4 mt-0">
        @include('frontend.profile.section.side-menu')
      <div class="col-lg-8">
        @yield('profile_content')
      </div>
    </div>
  </div>
</section>
@endsection
@push('scripts')
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
@endpush