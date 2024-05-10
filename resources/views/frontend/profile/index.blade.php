@extends('frontend.profile.master')
@section('title', 'User Profile')
@section('profile_content')

<div class="card mb-4">
    <div class="card-body">
        <div class="row">
        <div class="p-4">
                <div class="max-w-xl">
                    @include('frontend.profile.section.update-profile')
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="p-4">
                <div class="max-w-xl">
                    @include('frontend.profile.section.update-password')
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="p-4">
                <div class="max-w-xl">
                    @include('frontend.profile.section.delete-profile')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection