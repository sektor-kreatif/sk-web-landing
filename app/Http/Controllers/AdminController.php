<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;
use File;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function admin() {
        if(!Session::get('loginAdmin')) {
            return redirect('/admin/login');
        }else {
            return redirect('/admin/dashboard');
        }
    }

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
            // $property_id = '347687615';

            // // Using a default constructor instructs the client to use the credentials
            // // specified in GOOGLE_APPLICATION_CREDENTIALS environment variable.
            // $client = new BetaAnalyticsDataClient([
            //     'keyFilePath' => storage_path('./firebase.json')
            // ]);

            // // Make an API call.
            // $response = $client->runReport([
            //     'property' => 'properties/' . $property_id,
            //     'dateRanges' => [
            //         new DateRange([
            //             'start_date' => Carbon::now()->subDays(29)->toDateString(),
            //             'end_date' => 'today',
            //         ]),
            //     ],
            //     'dimensions' => [new Dimension(
            //         [
            //             'name' => 'date',
            //         ]
            //     ),
            //     ],
            //     'metrics' => [new Metric(
            //         [
            //             'name' => 'activeUsers',
            //         ]
            //     )
            //     ]
            // ]);

            return view('admin.content.dashboard');
        }
    }
}
