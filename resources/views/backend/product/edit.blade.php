@extends('admin.admin_master')
@section('title', 'Edit Product')
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

<!-- Success Message -->
@if (Session::has('message'))
<div class="alert alert-success" id="success-message">
    {{ Session::get('message') }}
</div>
@endif

<!-- Hide Success Message After 3 Seconds -->
<script>
    setTimeout(function () {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000);
</script>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>
        </div>

        <div class="box-content">
            <form class="form-horizontal" action="{{ url('/products/' . $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <fieldset>
                    <!-- Product Code -->
                    <div class="control-group">
                        <label class="control-label" for="code">Product Code</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="code" name="code" value="{{ $product->code }}">
                        </div>
                    </div>

                    <!-- Product Name -->
                    <div class="control-group">
                        <label class="control-label" for="name">Product Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="name" name="name" value="{{ $product->name }}">
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="control-group">
                        <label class="control-label" for="category">Category</label>
                        <div class="controls">
                            <select name="category" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Subcategory -->
                    <div class="control-group">
                        <label class="control-label" for="subcategory">Subcategory</label>
                        <div class="controls">
                            <select name="subcategory" id="subcategory">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Brand -->
                    <div class="control-group">
                        <label class="control-label" for="brand">Brand</label>
                        <div class="controls">
                            <select name="brand" id="brand">
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Unit -->
                    <div class="control-group">
                        <label class="control-label" for="unit">Unit</label>
                        <div class="controls">
                            <select name="unit" id="unit">
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}" {{ $product->unit_id == $unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Size -->
                    <div class="control-group">
                        <label class="control-label" for="size">Size</label>
                        <div class="controls">
                            <select name="size" id="size">
                                @foreach($sizes as $size)
                                    <option value="{{ $size->id }}" {{ $product->size_id == $size->id ? 'selected' : '' }}>{{ $size->size }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Color -->
                    <div class="control-group">
                        <label class="control-label" for="color">Color</label>
                        <div class="controls">
                            <select name="color" id="color">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>{{ $color->color }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="description">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" rows="3">{{ $product->description }}</textarea>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="control-group">
                        <label class="control-label" for="price">Price</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="price" name="price" value="{{ $product->price }}">
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="control-group">
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <input type="file" name="file[]" multiple required>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!--/span-->
</div><!--/row-->

@endsection
