@extends('auth.master')
@section('title','Login')
@section('content')
	<!-- Product Detail -->
	<div class="p-t-65 p-b-60 d-flex align-items-center" style="background-color: #D6DBDE; height: 100%;">
		<div class="container d-flex justify-content-center">
			<div class="flex flex-col sm:justify-center items-center pt-6 col-md-6">
				<div class="d-flex justify-content-center">
                    <a class="mb-3" href="{{ url('/') }}">
                    <img src="{{ asset('/') }}frontend/images/icons/my-logo.png" alt="Company Logo" style="height: 70px; width: auto;">
                    </a>
                </div>
				
				<div class="mt-6 px-6 py-4 rounded bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
					<div class="p-b-25 p-l-50 p-r-50">
						<form method="POST" action="{{ route('login') }}" class="mt-5">
							@csrf
							
							<!-- Email Address -->
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email">
								<x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
							</div>
							
							<!-- Password -->
							<div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
								<x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
							</div>
							
							<!-- Remember Me -->
							<div class="mb-3 form-check-inline">
								<input id="remember_me" type="checkbox" class="form-check-input ml-0" name="remember">
								<label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
							</div>
							
							<div class="mb-4">
								@if (Route::has('password.request'))
								<a href="{{ route('password.request') }}" style="color: #717FE0;">{{ __('Forgot your password?') }}</a>
								@endif
							</div>

							<div class="pt-3 mb-3">
								<button type="submit" class="btn btn-primary w-100" style="background-color: #717FE0; border: none;">{{ __('Log in') }}</button>
							</div>

							<div class="mt-4 text-center">
								<a class="text-dark" href="{{ route('register') }}">Don't have an account? <span style="color: #717FE0;">Register Now</span></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection