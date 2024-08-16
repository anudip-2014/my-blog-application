<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;




use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicPostController::class, 'index'])->name('Posts');

Route::resource('photos', PhotoController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Admin user management
    Route::resource('/users', UserController::class);

     // Admin post management
    Route::resource('/posts', PostController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::resource('posts', PostController::class);
    
});