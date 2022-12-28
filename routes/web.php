<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'homeIndex']);

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/login', [AdminController::class, 'loginIndex']);
Route::post('/admin/login/process', [AdminController::class, 'loginProcess']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/profile', [ProfileController::class, 'profileIndex']);
Route::post('/admin/profile/update', [ProfileController::class, 'profileUpdate']);

Route::get('/admin/article', [ArticleController::class, 'articleIndex']);
Route::post('/admin/category/add', [ArticleController::class, 'addCategory']);
Route::post('/admin/category/edit', [ArticleController::class, 'editCategory']);
Route::post('/admin/category/delete', [ArticleController::class, 'deleteCategory']);

Route::post('/admin/article/add', [ArticleController::class, 'addArticle']);
Route::get('/admin/article/{article_id}', [ArticleController::class, 'articleEditIndex']);
Route::post('/admin/article/{article_id}/edit', [ArticleController::class, 'editArticle']);
Route::post('/admin/article/delete', [ArticleController::class, 'deleteArticle']);
