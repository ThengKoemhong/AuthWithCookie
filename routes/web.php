<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
ROute::controller(LoginController::class)->group(function(){
    Route::get('/','index');
    Route::get('/login','login');
    Route::post('/logout','logout');
    Route::get('/register','register');
    Route::post('/postregister','postregister');
    Route::get('/getcookie','getDataFromCookie');
});