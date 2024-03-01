<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();

        return view('backend.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sizes = explode(',',$request->size);
        $size = new Size;
        $size->size = json_encode($sizes);

        $size->save();

        return redirect()->back()->with('message', 'Sizes created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('backend.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        $sizes = explode(',',$request->size);
        $update=$size->update([
            'size'=> json_encode($sizes),
        ]);

        if($update)
            return redirect('/sizes')->with('message','Sizes Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $delete=$size->delete();

        if($delete)
        return redirect()->back()->with('message', 'Sizes Deleted Successfully');
    }

    public function changeStatus(Size $size)
    {
        try {
            $size->status = $size->status == 1 ? 0 : 1;
            $size->save();

            return redirect()->back()->with('message', 'Status Change Successfully');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error changing size status: ' . $e->getMessage());

            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error changing size status');
        }
    }
}
