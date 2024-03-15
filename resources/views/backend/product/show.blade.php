@extends('admin.admin_master')
@section('title', 'Product Details')
@section('admin_content')

<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon user"></i><span class="break"></span>Product Details</h2>
    </div>
    <div class="box-content text-center">
        <!-- Images Section -->
        <div class="mb-3">
            @foreach ($product->image as $image)
            <img src="{{ asset('/image/' . $image) }}" alt="image" style="width: auto; height: 150px; margin: 10px;">
            @endforeach
        </div>

        <!-- Table Section -->
        <div class="box-content text-center">
        <div style="display: inline-block; width: 90%;">
        <table class="table table-bordered mx-auto" >
            <tbody>
                <tr>
                    <td>Product Code:</td>
                    <td>{{ $product->code }}</td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <td>Sub Category:</td>
                    <td>{{ $product->subcategory->name }}</td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>&#2547;{{ $product->price }}</td>
                </tr>
                <tr>
                    <td>Brand:</td>
                    <td>{{ $product->brand->name }}</td>
                </tr>
                <tr>
                    <td>Unit:</td>
                    <td>{{ $product->unit->name }}</td>
                </tr>
                <tr>
                    <td>Size:</td>
                    <td>
                        @foreach(json_decode($product->size->size) as $size)
                        <span class="label label-info">{{ $size }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Color:</td>
                    <td>
                        @foreach(json_decode($product->color->color) as $color)
                        <span class="label label-primary">{{ $color }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>
                        @if($product->status == 1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">Deactive</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</div>

@endsection
