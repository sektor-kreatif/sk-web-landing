<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Gallery;

class GalleryController extends Controller
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

    public function galleryIndex() {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        $gallery = Gallery::get();
        return \view('admin.content.gallery', \compact('gallery'));
    }

    public function addGallery(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'title' => '|required|unique:gallery',
                'category' => '|required',
                'type' => '|required'
            ]);
            $gallery = new Gallery();
            $gallery->gallery_id = $this->generateRandomString(16);
            $gallery->title = $request->title;
            if($request->hasFile('media')) {
                $gallery->media = cloudinary()->uploadFile($request->file('media')->getRealPath())->getSecurePath();
            }else {
                $gallery->media = $request->media;
            }
            $gallery->type = $request->type;
            $gallery->category = $request->category;
            if(!$gallery->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Gallery Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Gallery Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editGallery(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $gallery = Gallery::findOrFail($request->gallery_id);
            $gallery->title = $request->title;
            if($request->has('media')) {
                if($request->hasFile('media')) {
                    $gallery->media = cloudinary()->uploadFile($request->file('media')->getRealPath())->getSecurePath();
                }else {
                    $gallery->media = $request->media;
                }
            }
            $gallery->type = $request->type;
            $gallery->category = $request->category;
            if(!$gallery->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Gallery Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Gallery Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteGallery(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $gallery = Gallery::findOrFail($request->gallery_id);
            if(!$gallery->delete($gallery)) {
                return \redirect()->back()->with('alert-danger', 'Delete Gallery Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Gallery Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
