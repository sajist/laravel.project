<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WelcomeController;
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


Route::resource('/users', UserController::class);
Route::resource('/posts' , PostController::class);

Route::resource('/categories', CategoryController::class)->except(['show', 'create']);

Route::get('/', [WelcomeController::class , 'index'])->name('welcame');

Route::get('/dashboard', function () {
    return view('layouts.panel');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
