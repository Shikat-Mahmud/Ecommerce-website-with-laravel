@extends('admin.admin_master')
@section('title','Contact Us')
@section('admin_content')


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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Contact Us</h2>

			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th style="width: 10%;">Id</th>
						<th style="width: 20%;">Email</th>
						<th style="width: 70%;">Message</th>
					</tr>
				</thead>
				@foreach($contacts as $contact)
				<tbody>
					<tr>
						<td>{{ $contact->id }}</td>
						<td class="center">{{ $contact->email }}</td>
						<td class="center">{!! $contact->message !!}</td>
				</tbody>
				@endforeach
			</table>
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection