<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        return view('frontend.profile.index', compact('user'));
    }

    public function updatePass(Request $request){
        $user = Auth::user();
        return view('frontend.profile.update-password', compact('user'));
    }
}
