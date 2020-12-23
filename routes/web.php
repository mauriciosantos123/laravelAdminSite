<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;

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
Route::redirect('/', "admin");


Route::resource('admin', AdminController::class);
Route::resource('login', LoginController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('post', PostController::class);
Route::resource('products', ProductsController::class);

