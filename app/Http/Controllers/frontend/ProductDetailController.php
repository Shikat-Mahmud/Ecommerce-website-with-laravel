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

        $cat_id = $product->cat_id;
        $related_product = Product::where('cat_id', $cat_id)->where('id', '!=', $product->id)->limit(4)->get();

        return view('frontend.main.product-detail', compact('product', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors', 'related_product'));
    }
}
