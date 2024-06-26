<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function aboutUs()
    {
        $abouts = About::all();
        return view('backend.link.about', compact('abouts'));
    }

    public function editAboutUs(About $about)
    {
        return view('backend.link.edit_about', compact('about'));
    }

    public function updateAboutUs(Request $request, About $about)
    {
        $update=$about->update([
            'title'=> $request->title,
            'description'=> $request->description,
            'image'=> $request->file('image')->store('category'),
        ]);

        if($update)
            return redirect('/about-us')->with('message','About Updated Successfully');
    }

    public function contactUs()
    {
        $contacts = Contact::all();
        return view('backend.link.contact', compact('contacts'));
    }

    public function storeContact(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string',
                'message' => 'required|string',
            ]);

            Contact::create([
                'email' => $request->input('email'),
                'message' => $request->input('message')
            ]);

            return redirect()->back()->with('success', 'Form submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}
