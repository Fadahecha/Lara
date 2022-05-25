<?php

use App\Http\Controllers\factor\CategoryController;
use App\Http\Controllers\factor\MainController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/blog', [PostController::class, 'index']);


Route::get('/', MainController::class);

Route::get('/category', [MainController::class, 'category']);