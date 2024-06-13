<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/register', function (){
    return abort(404);
});
Route::get('/', function (){
    return redirect('home');
});

// Routes for Admin.
Route::prefix('admin')->name('name.')->middleware('auth')->controller(AdminController::class)->group(function (){
    Route::get('/', 'index');
});

// Routes for User.
Route::prefix('user')->name('user.')->middleware('auth')->controller(UserController::class)->group(function (){
    Route::get('/', 'index');
});


Route::prefix('home')->name('home.')->controller(HomeController::class)->group(function (){
    Route::get('/', 'index');
});
