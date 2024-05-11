@extends('admin.admin_master')
@section('title','General Settings')
@section('admin_content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<!-- Your Blade template -->
<p class="alert-success" id="success-message">
    <?php
    $message = Session::get('message');
    if($message)
    {
        echo $message;
        Session::put('message', null);
    }
    ?>
</p>

<script>
    // Add a timer to hide the success message after 3 seconds
    setTimeout(function () {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000); // 3000 milliseconds = 3 seconds
</script>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Application Settings</h2>
        </div>

        <div class="box-content">
            <form action="{{ route('setting-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="business_name">Business Name: </label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="business_name" name="business_name" value="{{ $general->business_name ?? ''}}" placeholder="Enter Title" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="business_address">Business Address: </label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="business_address" name="business_address" value="{{ $general->business_address ?? ''}}" placeholder="Enter Address" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="business_address">Business Phone Number: </label>
                        <div class="controls">
                            <input type="tel" placeholder="Enter Phone Number" class="input-xlarge" name="business_number" value="{{ $general->business_number ?? ''}}" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="business_address">Business Whatsapp Number: </label>
                        <div class="controls">
                            <input type="tel" placeholder="Enter Whatsapp Number" class="input-xlarge" name="business_whatsapp" value="{{ $general->business_whatsapp ?? ''}}" required>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="business_address">Business Email: </label>
                        <div class="controls">
                            <input type="email" placeholder="Enter email" class="input-xlarge" name="business_email" value="{{ $general->business_email ?? ''}}" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Logo: </label>
                        <div class="controls">
                            <input type="file" name="logo" accept="image/png, image/jpg, image/gif, image/jpeg" class="form-control">
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="controls">
                            @if(isset($general->logo))
                                <img src="{{ asset('storage/' . $general->logo) }}" alt="" style="height: 50px">
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">FavIcon: </label>
                        <div class="controls">
                            <input type="file" name="favicon" accept="image/png, image/jpg, image/gif, image/jpeg" class="form-control">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            @if(isset($general->favicon))
                                <img src="{{ asset('storage/' . $general->favicon) }}" alt="" style="height: 50px">
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Banner Image: </label>
                        <div class="controls">
                            <input type="file" name="banner_image" accept="image/png, image/jpg, image/gif, image/jpeg" class="form-control">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            @if(isset($general->banner_image))
                                <img src="{{ asset('storage/' . $general->banner_image) }}" alt="" style="height: 50px">
                            @endif
                        </div>
                    </div>
                    <br>

                    <div class="input-group mb-3">
                        <a class="btn btn-danger" style="margin-right: 10px" href="{{ url('admin') }}">Cancel </a>
                        <button class="btn btn-info" type="submit">Save </button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>

@endsection

@push('custom-script')
<script>
@foreach($errors->all() as $error)
toastr.error("{{ $error }}");
@endforeach

$(document).ready(function() {
    $('.select2').select2();
});

$(document).ready(function () {
    $('#stripe_payment-checkbox').change(function () {
        $('.myDiv').toggle(this.checked);
    });

    // Initial state check
    if ($('#stripe_payment-checkbox').is(':checked')) {
        $('.myDiv').show();
    } else {
        $('.myDiv').hide();
    } 
});
</script>
@endpush