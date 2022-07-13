<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name("welcome");

Route::middleware('auth')->group(function(){

    Route::get('/home', HomeController::class)->name('home');

    Route::middleware('verified')->group(function(){

        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        
    });
    
});

