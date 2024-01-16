<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;
use Session;

Session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function showDashboard(Request $request){

        $admin_email=$request->email;
        $admin_password=md5($request->password);
        $result=Admin::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        if($result){
            session::put('admin_id', $result->admin_id);
            session::put('admin_name', $result->admin_name);
            return Redirect::to('/dashboard');
        }
        else{
            session::put('message', 'Email or Password invalid');
            return Redirect::to('/admin');
        }
    }


}
