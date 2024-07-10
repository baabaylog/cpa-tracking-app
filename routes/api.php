<?php

use App\Http\Controllers\Api\PostbackURLController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(PostbackURLController::class)->group(function (){
    Route::get('/postback_url/{uid}/{company}', 'index');
    Route::any('/offer/{name}/{offer_id}', 'offer_link');
});

