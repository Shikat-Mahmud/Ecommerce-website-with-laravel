<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function aboutUs()
    {
        $abouts = About::all();
        return view('backend.link.about', compact('abouts'));
    }
}
