<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();

        return view('backend.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unit = new Unit;
        $unit->name = $request->name;

        $unit->save();

        return redirect()->back()->with('message', 'Unit created successfully');
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
    public function edit(Unit $unit)
    {
        return view('backend.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $update=$unit->update([
            'name'=> $request->name,
            'description'=> $request->description,
        ]);

        if($update)
            return redirect('/units')->with('message','Unit Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $delete=$unit->delete();

        if($delete)
        return redirect()->back()->with('message', 'Unit Deleted Successfully');
    }

    public function changeStatus(Unit $unit)
    {
        try {
            $unit->status = $unit->status == 1 ? 0 : 1;
            $unit->save();

            return redirect()->back()->with('message', 'Status Change Successfully');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error changing unit status: ' . $e->getMessage());

            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error changing unit status');
        }
    }
}
