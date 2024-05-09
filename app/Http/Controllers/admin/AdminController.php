<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;
use Session;

Session_start();

class AdminController extends Controller
{
    public function index(){
        session()->forget('message');
        return view('admin.admin_login');
    }


    
    // Admin login

    public function showDashboard(Request $request){

        $admin_email=$request->email;
        $admin_password=md5($request->password);
        $result=Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        if($result){
            Session::put('admin_id', $result->admin_id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('/admin');
        }
        else{
            return redirect('/admin-login')->withErrors(['message' => 'Email or Password invalid'])->withInput();
        }
    }


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

