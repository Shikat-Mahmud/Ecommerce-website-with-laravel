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
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }


    // logout

    public function logout(){
        Session::flush();
        return Redirect::to('/admin-login');
    }


    // admin auth check

    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');

        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admin-login')->send();
        }
    }

}
