<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function loginIndex(){
        if(! Session::get('loginAdmin')){
            $admin = Admin::get();
            if($admin->count() < 1){
                $adm = new Admin;
                $adm->username = "admin";
                $adm->password = "admin123";
                $adm->name = "Default Admin";
                $adm->save();
            }
            return view('admin.content.login');
        }else{
            return redirect('/admin/dashboard')->with('alert-warning', 'You are still in your session!');
        }
    }

    //Login process
    public function loginProcess(Request $request){
        $username = $request->username;
        $password = $request->password;
        $admin = Admin::where('username', $username)->first();

        if($admin){
            if(Hash::check($password, $admin->password)){
                Session::put('loginAdmin', Hash::make($username));
                Session::put('username', $username);
                Session::put('name', $admin->name);
                return redirect('/admin/dashboard')->with('alert-success', 'Login success!');
            }else{
                return redirect()->back()->with('alert-danger', 'Wrong password!');
            }
        }else{
            return redirect()->back()->with('alert-danger', 'Wrong username!');
        }
    }

    //Logout
    public function logout(){
        if(! Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert-danger', 'You must login firstly!');
        }else{
            Session::forget('loginAdmin');
            Session::forget('username');
            Session::forget('name');
            return redirect('/admin/login')->with('alert-danger', 'Logout success!');
        }
    }

    //Dasboard Index
    public function dashboard(){
        if(! Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert-danger', 'You must login firstly!');
        }else{
            return view('admin.content.dashboard');
        }
    }
}
