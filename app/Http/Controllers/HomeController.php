<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Service;
use App\Models\Testimony;
use App\Models\Mitra;
use App\Models\Profile;

class HomeController extends Controller
{
    public function homeIndex() {
        $category = Gallery::orderBy('category', 'asc')->get()->unique('category');
        $category_article = Category::orderBy('category', 'asc')->get();
        $gallery_latest = Gallery::latest()->take(9)->get();
        $services = Service::orderBy('service', 'asc')->get();
        $testimony = Testimony::orderBy('created_at', 'desc')->get();
        $mitra = Mitra::orderBy('created_at', 'desc')->get();
        $profile = Profile::get();
        return \view('user.home', \compact('category', 'category_article', 'gallery_latest', 'services', 'testimony', 'mitra', 'profile'));
    }

    public function galleryIndex() {
        $category = Gallery::orderBy('category', 'asc')->get()->unique('category');
        $category_article = Category::orderBy('category', 'asc')->get();
        $gallery_latest = Gallery::latest()->take(4)->get();
        $services = Service::orderBy('service', 'asc')->get();
        $testimony = Testimony::orderBy('created_at', 'desc')->get();
        $mitra = Mitra::orderBy('created_at', 'desc')->get();
        $profile = Profile::get();
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return \view('user.galleries', \compact('category', 'category_article', 'gallery_latest', 'services', 'testimony', 'mitra', 'profile', 'galleries'));
    }

    public function galleryCategoryIndex($cat) {
        $category = Gallery::orderBy('category', 'asc')->get()->unique('category');
        $category_article = Category::orderBy('category', 'asc')->get();
        $gallery_latest = Gallery::latest()->take(4)->get();
        $services = Service::orderBy('service', 'asc')->get();
        $testimony = Testimony::orderBy('created_at', 'desc')->get();
        $mitra = Mitra::orderBy('created_at', 'desc')->get();
        $profile = Profile::get();
        $galleries = Gallery::where('category', $cat)->orderBy('created_at', 'desc')->get();
        return \view('user.galleries-category', \compact('category', 'category_article', 'gallery_latest', 'services', 'testimony', 'mitra', 'profile', 'galleries'));
    }
}
