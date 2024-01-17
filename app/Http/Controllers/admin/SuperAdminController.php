<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

Session_start();

class SuperAdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    
    // logout

    public function logout(){
        Session::flush();
        return Redirect::to('/admin');
    }

}
