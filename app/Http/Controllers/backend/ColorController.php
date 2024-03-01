<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();

        return view('backend.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $colors = explode(',',$request->color);
        $color = new Color;
        $color->color = json_encode($colors);

        $color->save();

        return redirect()->back()->with('message', 'Colors created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('backend.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $colors = explode(',',$request->color);
        $update=$color->update([
            'color'=> json_encode($colors),
        ]);

        if($update)
            return redirect('/colors')->with('message','Colors Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $delete=$color->delete();

        if($delete)
        return redirect()->back()->with('message', 'Colors Deleted Successfully');
    }

    public function changeStatus(Color $color)
    {
        try {
            $color->status = $color->status == 1 ? 0 : 1;
            $color->save();

            return redirect()->back()->with('message', 'Status Change Successfully');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error changing color status: ' . $e->getMessage());

            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error changing color status');
        }
    }
}
