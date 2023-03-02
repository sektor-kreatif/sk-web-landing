<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonyController;

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
Route::get('/gallery', [HomeController::class, 'galleryIndex']);
Route::get('/gallery/category/{cat}', [HomeController::class, 'galleryCategoryIndex']);

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

Route::get('/admin/gallery', [GalleryController::class, 'galleryIndex']);
Route::post('/admin/gallery/add', [GalleryController::class, 'addGallery']);
Route::post('/admin/gallery/edit', [GalleryController::class, 'editGallery']);
Route::post('/admin/gallery/delete', [GalleryController::class, 'deleteGallery']);

Route::get('/admin/documentation', [DocumentationController::class, 'documentationIndex']);
Route::post('/admin/documentation/add', [DocumentationController::class, 'addDocumentation']);
Route::post('/admin/documentation/edit', [DocumentationController::class, 'editDocumentation']);
Route::post('/admin/documentation/delete', [DocumentationController::class, 'deleteDocumentation']);

Route::get('/admin/mitra', [MitraController::class, 'mitraIndex']);
Route::post('/admin/mitra/add', [MitraController::class, 'addMitra']);
Route::post('/admin/mitra/edit', [MitraController::class, 'editMitra']);
Route::post('/admin/mitra/delete', [MitraController::class, 'deleteMitra']);

Route::get('/admin/service', [ServiceController::class, 'serviceIndex']);
Route::post('/admin/service/add', [ServiceController::class, 'addService']);
Route::post('/admin/service/edit', [ServiceController::class, 'editService']);
Route::post('/admin/service/delete', [ServiceController::class, 'deleteService']);

Route::get('/admin/testimony', [TestimonyController::class, 'testimonyIndex']);
Route::post('/admin/testimony/add', [TestimonyController::class, 'addTestimony']);
Route::post('/admin/testimony/edit', [TestimonyController::class, 'editTestimony']);
Route::post('/admin/testimony/delete', [TestimonyController::class, 'deleteTestimony']);
