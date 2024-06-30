<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
//Login Route
Route::middleware('guest')->controller(AuthenticatedSessionController::class)->group(function () {

    Route::get('login','create')
        ->name('login');

    Route::post('login', 'store');

});

//Authentication Logout Route
Route::middleware('auth')->group(function (){
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });

*/

//General Group routes
Route::controller(AuthenticatedSessionController::class)->group(function () {

        //Login Route
        Route::middleware('guest')->group(function () {

        Route::get('login','create')
            ->name('login');

        Route::post('login', 'store');
    });

    //Authentication Logout Route
    Route::middleware('auth')->group(function (){

        Route::post('logout', 'destroy')
            ->name('logout');

    });

});
