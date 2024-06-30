<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->controller(RegisteredUserController::class)->group(function () {

    Route::get('register', 'create')
                ->name('register');

    Route::post('register', 'store');
});

