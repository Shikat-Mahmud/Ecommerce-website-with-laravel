<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Faq;
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
        $brands = Brand::where('status', 1)->get();
        $units = Unit::where('status', 1)->get();
        $sizes = Size::where('status', 1)->get();
        $colors = Color::where('status', 1)->get();

        return view('frontend.main.home', compact('products', 'categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }
    
    public function about(){
        $about = About::first();
        return view('frontend.main.about', compact('about'));
    }

    public function contact(){
        return view('frontend.main.contact');
    }

    public function faq(){
        $faqs = Faq::latest()->limit(10)->get();
        return view('frontend.main.faq', compact('faqs'));
    }
}
