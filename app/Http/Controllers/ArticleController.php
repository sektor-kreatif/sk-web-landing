<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
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

    public function articleIndex() {
        if(Session::get('loginAdmin')) {
            $category = Category::get();
            $article = Article::get();
            return \view('admin.content.article', compact('category', 'article'));
        }else {
            return \redirect('/admin/login');
        }
    }

    public function addCategory(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'category' => '|required|unique:category',
            ]);
            $category = new Category();
            $category->category_id = $this->generateRandomString(16);
            $category->category = $request->category;
            if(!$category->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Category Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Category Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function editCategory(Request $request) {
        if(!Session::get('admin')) {
            return \redirect('/admin/login');
        }
        try {
            $category = Category::findOrFail($request->category_id);
            $category->category = $request->category;
            if(!$category->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Category Failed');
            }
            return \redirect()->back()->with('alert-success', 'Edit Category Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteCategory(Request $request) {
        if(!Session::get('admin')) {
            return \redirect('/admin/login');
        }
        try {
            $category = Category::findOrFail($request->category_id);
            if(!$category->delete($category)) {
                return \redirect()->back()->with('alert-danger', 'Delete Category Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Category Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function addArticle(Request $request) {
        if(!Session::get('loginAdmin')) {
            return \redirect('/admin/login');
        }
        try {
            $this->validate($request, [
                'title' => '|required|unique:article',
                'cat_id' => '|required',
                'content' => '|required',
                'image' => '|required|image|mimes:jpeg,jpg,png,gif',
                'status' => '|required',
                'published_at' => '|required'
            ]);
            $article = new Article();
            $article->article_id = $this->generateRandomString(16);
            $article->title = $request->title;
            $article->content = $request->content;
            $article->image = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            $article->status = $request->status;
            $article->category_id = $request->cat_id;
            $article->published_at = $request->published_at;
            $article->expired_at = $request->expired_at;
            if(!$article->save()) {
                return \redirect()->back()->with('alert-danger', 'Add Article Failed');
            }
            return \redirect()->back()->with('alert-success', 'Add Article Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function articleEditIndex($article_id) {
        if(Session::get('loginAdmin')) {
            $category = Category::get();
            $article = Article::findOrFail($article_id);
            return \view('admin.content.article-edit', compact('category', 'article'));
        }else {
            return \redirect('/admin/login');
        }
    }

    public function editArticle($article_id, Request $request) {
        try {
            $article = Article::findOrFail($article_id);
            $article->title = $request->title;
            $article->content = $request->content;
            if($request->has('image')) {
                $this->validate($request, [
                    'image' => '|image|mimes:jpeg,jpg,png,gif'
                ]);
                $article->image = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath();
            }
            $article->status = $request->status;
            $article->category_id = $request->cat_id;
            $article->published_at = $request->published_at;
            $article->expired_at = $request->expired_at;
            if(!$article->save()) {
                return \redirect()->back()->with('alert-danger', 'Edit Article Failed');
            }
            return \redirect('/admin/article')->with('alert-success', 'Edit Article Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }

    public function deleteArticle(Request $request) {
        try {
            $article = Article::findOrFail($request->article_id);
            if(!$article->delete($article)) {
                return \redirect()->back()->with('alert-danger', 'Delete Article Failed');
            }
            return \redirect()->back()->with('alert-success', 'Delete Article Success');
        }catch(Exception $e) {
            return \redirect()->back()->with('alert-danger', $e);
        }
    }
}
