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
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="p-4">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
            </div>
        </div>
    </div>
</div>
@endsection