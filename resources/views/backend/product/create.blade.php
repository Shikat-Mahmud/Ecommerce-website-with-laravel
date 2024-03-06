@extends('admin.admin_master')
@section('title','Add Product')
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
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>

        </div>

        <div class="box-content">
            <form class="form-horizontal" action="{{ url('/products') }}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Product Code</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="code" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Product Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="name" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Category</label>
                        <div class="controls">
                            <select class="input-xlarge" name="category" style="magrgin-left:20px;">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Sub Category</label>
                        <div class="controls">
                            <select class="input-xlarge" name="subcategory" style="magrgin-left:20px;">
                                <option value="">Select Sub Category</option>
                                @foreach($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Brand</label>
                        <div class="controls">
                            <select class="input-xlarge" name="brand" style="magrgin-left:20px;">
                                <option value="">Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Unit</label>
                        <div class="controls">
                            <select class="input-xlarge" name="unit" style="magrgin-left:20px;">
                                <option value="">Select Unit</option>
                                @foreach($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Size</label>
                        <div class="controls">
                            <select class="input-xlarge" name="size" style="magrgin-left:20px;">
                                <option value="">Select Size</option>
                                @foreach($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Select Color</label>
                        <div class="controls">
                            <select class="input-xlarge" name="color" style="magrgin-left:20px;">
                                <option value="">Select Color</option>
                                @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" rows="3" required></textarea>
                        </div>

                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Product Price</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="price" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Image Upload</label>
                        <div class="controls">
                            <input type="file" name="file[]" multiple required>
                        </div>
                    </div>


                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div><!--/span-->
</div><!--/row-->

@endsection