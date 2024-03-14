<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('backend.product.create', compact('categories', 'subcategories', 'brands', 'units', 'sizes', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->cat_id = $request->category;
        $product->subcat_id = $request->subcategory;
        $product->brand_id = $request->brand;
        $product->unit_id = $request->unit;
        $product->size_id = $request->size;
        $product->color_id = $request->color;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $images = array();
        if($files = $request->file('file')){
            $i=0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $fileNameExtract=explode('.', $name);
                $fileName=$fileNameExtract[0];
                $fileName.=time();
                $fileName.=$i;
                $fileName.='.';
                $fileName.=$fileNameExtract[1];
                $file->move('image', $fileName);
                $image[]=$fileName;
                $i++;
            }

            $product['image']=implode("|",$images);

            $product->save();
            return redirect()->back()->with('message', 'Product created successfully');
        } else {
            echo "error";
        }

        $product->save();
        return redirect()->back()->with('message', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
