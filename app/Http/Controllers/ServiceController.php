<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Service;

class ServiceController extends Controller
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

    public function serviceIndex() {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        $service = Service::get();
        return \view('admin.content.service', \compact('service'));
    }

    public function addService(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'service' => '|required|unique:service',
                'desc' => '|required',
                'key' => '|required|unique:service',
                'icon' => '|required|mimes:jpeg,jpg,png,gif',
            ]);
            $service = new Service();
            $service->service_id = $this->generateRandomString(16);
            $service->service = $request->service;
            $service->key = $request->key;
            $service->icon = cloudinary()->uploadFile($request->file('icon')->getRealPath())->getSecurePath();
            $service->desc = $request->desc;
            if(!$service->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Service Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Service Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editService(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $service = Service::findOrFail($request->service_id);
            $service->service = $request->service;
            $service->key = $request->key;
            if($request->has('icon')) {
                $this->validate($request, [
                    'icon' => '|required|mimes:jpeg,jpg,png,gif',
                ]);
                $service->icon = cloudinary()->uploadFile($request->file('icon')->getRealPath())->getSecurePath();
            }
            $service->desc = $request->desc;
            if(!$service->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Service Failed');
            }
            return \redirect()->back()->with('alert-success', 'Edit Service Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteService(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $service = Service::findOrFail($request->service_id);
            if(!$service->delete($service)) {
                return \redirect()->back()->with('alert-danger', 'Delete Service Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Service Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
