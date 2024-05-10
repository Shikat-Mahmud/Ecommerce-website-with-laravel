@extends('frontend.master')
@section('content')
<section style="background-color: #eee;">
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