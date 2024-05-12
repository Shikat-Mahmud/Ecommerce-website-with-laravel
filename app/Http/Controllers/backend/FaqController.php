<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('backend.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('backend.faq.create');
    }

    public function store(Request $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect()->back()->with('message', 'Faq created successfully');
    }

    public function edit(Faq $faq)
    {
        return view('backend.faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $update=$faq->update([
            'question'=> $request->question,
            'answer'=> $request->answer,
        ]);

        if($update)
            return redirect('/faqs')->with('message','Faq Updated Successfully');
    }

    public function destroy(Faq $faq)
    {
        $delete=$faq->delete();

        if($delete)
        return redirect()->back()->with('message', 'Faq Deleted Successfully');
    }

    public function changeStatus(Faq $faq)
    {
        try {
            $faq->status = $faq->status == 1 ? 0 : 1;
            $faq->save();

            return redirect()->back()->with('message', 'Status Change Successfully');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error changing faq status: ' . $e->getMessage());

            // Return an error message or handle it as needed
            return redirect()->back()->with('error', 'Error changing faq status');
        }
    }
}
