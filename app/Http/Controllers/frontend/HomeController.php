<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;


class HomeController extends Controller
{
    public function index(){
        $products = Product::where('status', 1)->latest()->limit(12)->get();
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();

        return view('frontend.home', compact('products', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }
}
