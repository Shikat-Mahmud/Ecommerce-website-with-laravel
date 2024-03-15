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
        $categories = Category::where('status', 1)->get();
        $subcategories = SubCategory::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();;
        $units = Unit::where('status', 1)->get();;
        $sizes = Size::where('status', 1)->get();;
        $colors = Color::where('status', 1)->get();;

        return view('frontend.home', compact('products', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }
}
