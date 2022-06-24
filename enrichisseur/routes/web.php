<?php


use App\Http\Controllers\factor\MainController;
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


Route::middleware(['auth'])->group( function(){

    Route::get('/', MainController::class)->name('home');
    Route::get('/home', MainController::class)->name('home');

// Route::get('/category', [MainController::class, 'category']);

// Route::post('phrase.stocker', [PhraseController::class, 'store'])->name('phrase.store');

Route::post('/result', [MainController::class, 'result1']);

Route::get('/export/{id}', [MainController::class, 'export'])->name('export');

});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
