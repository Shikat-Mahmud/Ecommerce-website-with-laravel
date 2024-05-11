@extends('auth.master')
@section('title','Register')
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
                        <form method="POST" action="{{ route('register') }}" class="mt-5">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label stext-101 c15">{{ __('Name') }}</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label stext-101 c15">{{ __('Email') }}</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label stext-101 c15">{{ __('Password') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="Enter your password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label stext-101 c15">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                            </div>
                            
                            <div class="pt-3 mb-3">
                                <button type="submit" class="btn btn-primary ms-4 w-100 stext-101" style="background-color: #717fe0; border: none;">{{ __('Register') }}</button>
                            </div>

                            <div class="mt-4 text-center">
                                <a class="text-dark" href="{{ route('login') }}">Already registered? <span style="color: #717fe0;">Login Now</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
