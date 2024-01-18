<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $category = new Category;
    $category->name = $request->name;
    $category->description = $request->description;
    $category->image = $request->image->store('category');

    // if ($request->hasFile('image')) {
    //     $file = $request->file('image');
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time().'.'.$extension;
    //     $file->move('category', $filename);
    //     $category->image = $filename;
    // }

    $category->save();

    return redirect()->back()->with('message', 'Category created successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
