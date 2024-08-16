<?php

use Illuminate\Support\Facades\Route;






use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::resource('/posts', PublicPostController::class);



Route::get('/register/select-role', [RegisterController::class, 'showRoleSelectionForm'])->name('register.select-role');

// Default User Registration Route
Route::get('/register/user', [RegisterController::class, 'showUserRegistrationForm'])->name('register.user');

// Author Registration Route
Route::get('/register/author', [RegisterController::class, 'showAuthorRegistrationForm'])->name('register.author');




Auth::routes();




Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Admin user management
    Route::resource('/users', UserController::class);

     // Admin post management
    Route::resource('/posts', PostController::class);
});



Route::middleware(['auth', 'role:author'])->group(function () {
    // Allow authors to manage their posts
    Route::resource('posts', PublicPostController::class)->except(['index', 'show']);
});