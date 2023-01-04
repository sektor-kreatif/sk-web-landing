<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function testimonyIndex() {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        $testimony = Testimony::get();
        return \view('admin.content.testimony', \compact('testimony'));
    }

    public function addTestimony(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'text' => '|required|unique:testimony',
                'username' => '|required|unique:testimony',
            ]);
            $testimony = new Testimony();
            $testimony->testimony_id = $this->generateRandomString(16);
            $testimony->text = $request->text;
            $testimony->username = $request->username;
            if(!$testimony->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Testimony Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Testimony Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editTestimony(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $testimony = Testimony::findOrFail($request->testimony_id);
            $testimony->text = $request->text;
            $testimony->username = $request->username;
            if(!$testimony->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Testimony Failed');
            }
            return \redirect()->back()->with('alert-success', 'Edit Testimony Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteTestimony(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $testimony = Testimony::findOrFail($request->testimony_id);
            if(!$testimony->delete($testimony)) {
                return \redirect()->back()->with('alert-danger', 'Delete Testimony Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Testimony Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
