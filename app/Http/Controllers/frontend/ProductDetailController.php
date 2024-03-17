<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($id){
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $subcategories = SubCategory::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        $sizes = Size::find($product->size_id);
        $colors = Color::find($product->color_id);

        return view('frontend.main.product-detail', compact('product', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }
}
