<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PostbackController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::prefix('admin')->name('admin.')->middleware('auth')->controller(AdminController::class)->group(function (){

    Route::get('/', 'index')->name('dashboard');
    
    Route::prefix('users')->name('users.')->controller(UsersController::class)->group(function (){

        Route::get('/', 'index')->name('view');
        
    });

    Route::prefix('postback')->name('postback.')->controller(PostbackController::class)->group(function (){
        Route::get('/', 'index')->name('view');
    });

    Route::prefix('offer')->name('offer.')->controller(OfferController::class)->group(function (){
        Route::get('/', 'index')->name('view');
        Route::get('/create', 'create')->name('create');

        Route::post('/store', 'store')->name('store');
    });
});

// Generate postback URL, Create offer 


// Routes for User.
Route::prefix('user')->name('user.')->middleware('auth')->controller(UserController::class)->group(function (){
    Route::get('/', 'index')->name('dashboard');
});


Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function (){
    Route::get('/', 'index')->name('view');
});



Route::prefix('home')->name('home.')->controller(HomeController::class)->group(function (){
    Route::get('/', 'index');
});
