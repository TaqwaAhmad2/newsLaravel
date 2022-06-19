<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\DB;
use \App\Http\Controllers\frontsiteController;
use \App\Http\Controllers\dashboard\dashboardController;

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

Route::get('/', function () {
//    dd("hi");
    return view('frontsite.index');
});


Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth'])->name('auth');
Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'do_register'])->name('do_register');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [dashboardController::class, 'showindex'])->name('admin.admin');
    Route::resource('post', \App\Http\Controllers\dashboard\postController::class);
    Route::resource('author', \App\Http\Controllers\dashboard\AuthorController::class);
    Route::resource('category', \App\Http\Controllers\dashboard\CategoryController::class);

});
//Route::get('/admin', [dashboardController::class, 'showindex'])->name('admin.admin');
//Route::resource('/admin/post', \App\Http\Controllers\dashboard\postController::class);
//Route::resource('/admin/category', \App\Http\Controllers\dashboard\CategoryController::class);

//Route::get('viewpost', [\App\Http\Controllers\dashboard\postController::class,'show'])->name('viewpost');

Route::get('/home', [frontsiteController::class, 'showhome'])->name('frontsite.home');
Route::get('/', [frontsiteController::class, 'showhome'])->name('frontsite.home');
//Route::get('/single?id=', [frontsiteController::class, 'showsingle'])->name('frontsite.single');
Route::get('/single/{id}', [frontsiteController::class, 'showsingle'])->name('frontsite.single');
Route::get('/singlepost/{id}', [frontsiteController::class, 'showsinglepost'])->name('frontsite.singlepost');
Route::get('/authors', [frontsiteController::class, 'showouthors'])->name('frontsite.authors');
Route::get('/allnews', [frontsiteController::class, 'showallnews'])->name('frontsite.allnews');


