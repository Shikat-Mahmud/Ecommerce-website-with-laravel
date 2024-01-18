@extends('admin.admin_master')
@section('title','Categories')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
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
								  <th style="width: 15%;">Category Name</th>
								  <th style="width: 35%;">Description</th>
								  <th style="width: 15%;">Image</th>
								  <th style="width: 15%;">Status</th>
								  <th style="width: 15%;">Actions</th>
							  </tr>
						  </thead>  
                          @foreach($categories as $category) 
						  <tbody>
							<tr>
								<td>{{ $category->id }}</td>
								<td class="center">{{ $category->name }}</td>
								<td class="center">{!! $category->description !!}</td>
								<td class="center">
                                    <img src="{{ asset('/storage/' . $category->image) }}" alt="image" style="width: auto; height: 100px; margin: 2px;">
                                </td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>


						  </tbody>
                          @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@endsection