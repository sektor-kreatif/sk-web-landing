<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/admin/login', [AdminController::class, 'loginIndex']);
Route::post('/admin/login/process', [AdminController::class, 'loginProcess']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
