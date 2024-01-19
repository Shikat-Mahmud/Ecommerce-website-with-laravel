<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::all();

        return view('backend.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $subcategory = new SubCategory;
    $subcategory->cat_id=$request->category;
    $subcategory->name = $request->name;
    $subcategory->description = $request->description;

    $subcategory->save();

    return redirect()->back()->with('message', 'Sub Category created successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subcategory)
    {
        $categories=Category::all();
        return view('backend.subcategory.edit', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $update=$subcategory->update([
            'name'=> $request->name,
            'cat_id'=> $request->category,
            'description'=> $request->description,
        ]);

        if($update)
            return redirect('/sub-categories')->with('message','Sub Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        try {
            $delete = $subcategory->delete();
    
            if ($delete) {
                return redirect()->back()->with('message', 'Sub Category Deleted Successfully');
            } else {
                return redirect()->back()->with('error', 'Error deleting Sub Category');
            }
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error deleting subcategory: ' . $e->getMessage());
    
            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error deleting Sub Category');
        }
    }

    public function changeStatus(SubCategory $subcategory)
    {
        try {
            $subcategory->status = $subcategory->status == 1 ? 0 : 1;
            $subcategory->save();

            return redirect()->back()->with('message', 'Status Change Successfully');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error changing category status: ' . $e->getMessage());

            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error changing category status');
        }
    }
}
