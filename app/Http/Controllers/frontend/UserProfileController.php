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
        // $userId = $request->id;
        // $user = User::find($userId);
        return view('frontend.profile.index', compact('user'));
    }
}