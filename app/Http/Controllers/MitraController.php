<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Mitra;

class MitraController extends Controller
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

    public function mitraIndex() {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        $mitra = Mitra::get();
        return \view('admin.content.mitra', \compact('mitra'));
    }

    public function addMitra(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'name' => '|required|unique:mitra',
                'desc' => '|required',
                'logo' => '|required|mimes:jpeg,jpg,png,gif',
            ]);
            $mitra = new Mitra();
            $mitra->mitra_id = $this->generateRandomString(16);
            $mitra->name = $request->name;
            $mitra->logo = cloudinary()->uploadFile($request->file('logo')->getRealPath())->getSecurePath();
            $mitra->desc = $request->desc;
            if(!$mitra->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Mitra Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Mitra Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editMitra(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $mitra = Mitra::findOrFail($request->mitra_id);
            $mitra->name = $request->name;
            if($request->has('logo')) {
                $this->validate($request, [
                    'logo' => '|required|mimes:jpeg,jpg,png,gif,mp4,mkv,mov,ogg,qt',
                ]);
                $mitra->logo = cloudinary()->uploadFile($request->file('logo')->getRealPath())->getSecurePath();
            }
            $mitra->desc = $request->desc;
            if(!$mitra->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Mitra Failed');
            }
            return \redirect()->back()->with('alert-success', 'Edit Mitra Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteMitra(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $mitra = Mitra::findOrFail($request->mitra_id);
            if(!$mitra->delete($mitra)) {
                return \redirect()->back()->with('alert-danger', 'Delete Mitra Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Mitra Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
