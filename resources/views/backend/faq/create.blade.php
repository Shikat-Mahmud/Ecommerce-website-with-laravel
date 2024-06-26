@extends('admin.admin_master')
@section('title','Add FAQ')
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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add FAQ</h2>

        </div>

        <div class="box-content">
            <form class="form-horizontal" action="{{ url('/faqs') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Question</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="question" placeholder="Enter your question" required>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Answer</label>
                        <div class="controls">
                            <textarea class="cleditor" name="answer" rows="3" placeholder="Enter your answer" required></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add FAQ</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->
</div><!--/row-->

@endsection