@extends('admin.admin_master')
@section('title','Product List')
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
			<h2><i class="halflings-icon user"></i><span class="break"></span>Products</h2>

			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered table-responsive bootstrap-datatable datatable">
				<thead>
					<tr>
						<th style="width: 10%;">Product Code</th>
						<th style="width: 15%;">Product Name</th>
						<th style="width: 10%;">Category</th>
						<th style="width: 10%;">Sub Category</th>
						<th style="width: 10%;">Price</th>
						<th style="width: 15%;">Image</th>
						<th style="width: 10%;">Status</th>
						<th style="width: 20%;">Actions</th>
					</tr>
				</thead>
				@foreach($products as $product)
				@php
					$product->image = explode("|", $product->image);
				@endphp
				<tbody>
					<tr>
						<td>{{ $product->code }}</td>
						<td class="center">{{ $product->name }}</td>
						<td class="center">{{ $product->category->name }}</td>
						<td class="center">{{ $product->subcategory->name }}</td>
						<td class="center">&#2547;{{ $product->price }}</td>
						<td class="center">
							@foreach ($product->image as $image)
							<img src="{{ asset('/image/' . $image) }}" alt="image"
								style="width: auto; height: 50px; margin: 2px;">
							@endforeach
						</td>
						<td class="center">
							@if($product->status==1)
							<span class="label label-success">Active</span>
							@else
							<span class="label label-danger">Deactive</span>
							@endif
						</td>
						<td class="row">
							<div class="span2" style="margin-right: 3px;">
								@if($product->status==1)
								<a class="btn btn-success" href="{{ url('/product-status/' . $product->id) }}">
									<i class="halflings-icon white thumbs-down"></i>
								</a>
								@else
								<a class="btn btn-danger" href="{{ url('/product-status/' . $product->id) }}">
									<i class="halflings-icon white thumbs-up"></i>
								</a>
								@endif
							</div>
							<div class="span2" style="margin-right: 3px;">
								<a class="btn btn-secondary" href="{{ route('products.show', $product->id) }}">
									<i class="halflings-icon white eye-open"></i>
								</a>
							</div>
							<div class="span2" style="margin-right: 3px;">
								<a class="btn btn-info" href="{{ url('/products/' . $product->id . '/edit') }}">
									<i class="halflings-icon white edit"></i>
								</a>
							</div>
							<div class="span2">
							<form action="{{ url('/products/' .$product->id) }}" method="post" >
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit"><i class="halflings-icon white trash"></i></button>
							</form>
							</div>
						</td>
				</tbody>
				@endforeach
			</table>
		</div>
	</div><!--/span-->

</div><!--/row-->


@endsection