@extends('admin.admin_master')
@section('title','FAQs')
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
			<h2><i class="halflings-icon user"></i><span class="break"></span>FAQs</h2>

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
						<th style="width: 5%;">Id</th>
						<th style="width: 20%;">Question</th>
						<th style="width: 40%;">Answer</th>
						<th style="width: 10%;">Status</th>
						<th style="width: 25%;">Actions</th>
					</tr>
				</thead>
				@foreach($faqs as $faq)
				<tbody>
					<tr>
						<td>{{ $faq->id }}</td>
						<td class="center">{{ $faq->question }}</td>
						<td class="center">{!! $faq->answer !!}</td>
						<td class="center">
							@if($faq->status==1)
							<span class="label label-success">Active</span>
							@else
							<span class="label label-danger">Deactive</span>
							@endif
						</td>
						<td class="row">
							<div class="span2"></div>
							<div class="span2">
								@if($faq->status==1)
								<a class="btn btn-success" href="{{ url('/faq-status/' . $faq->id) }}">
									<i class="halflings-icon white thumbs-down"></i>
								</a>
								@else
								<a class="btn btn-danger" href="{{ url('/faq-status/' . $faq->id) }}">
									<i class="halflings-icon white thumbs-up"></i>
								</a>
								@endif
							</div>
							<div class="span2">
								<a class="btn btn-info" href="{{ url('/faqs/' . $faq->id . '/edit') }}">
									<i class="halflings-icon white edit"></i>
								</a>
							</div>
							<div class="span2">
							<form action="{{ url('/faqs/' .$faq->id) }}" method="post" >
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
							</form>
							</div>
							<div class="span2"></div>
						</td>
				</tbody>
				@endforeach
			</table>
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection