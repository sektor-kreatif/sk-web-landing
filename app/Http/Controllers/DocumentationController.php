<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Documentation;

class DocumentationController extends Controller
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

    public function documentationIndex() {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        $documentation = Documentation::get();
        return \view('admin.content.documentation', \compact('documentation'));
    }

    public function addDocumentation(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'title' => '|required|unique:documentation',
                'description' => '|required',
                'type' => '|required',
            ]);
            $documentation = new Documentation();
            $documentation->doc_id = $this->generateRandomString(16);
            $documentation->title = $request->title;
            if($request->hasFile('media')) {
                $documentation->media = cloudinary()->uploadFile($request->file('media')->getRealPath())->getSecurePath();
            }else {
                $documentation->media = $request->media;
            }
            $documentation->type = $request->type;
            $documentation->description = $request->description;
            if(!$documentation->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Documentation Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Documentation Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editDocumentation(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $documentation = Documentation::findOrFail($request->doc_id);
            $documentation->title = $request->title;
            if($request->has('media')) {
                if($request->hasFile('media')) {
                    $documentation->media = cloudinary()->uploadFile($request->file('media')->getRealPath())->getSecurePath();
                }else {
                    $documentation->media = $request->media;
                }
            }
            $documentation->type = $request->type;
            $documentation->description = $request->description;
            if(!$documentation->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Documentation Failed');
            }
            return \redirect()->back()->with('alert-success', 'Edit Documentation Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteDocumentation(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $documentation = Documentation::findOrFail($request->doc_id);
            if(!$documentation->delete($documentation)) {
                return \redirect()->back()->with('alert-danger', 'Delete Documentation Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Documentation Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
