<?php

use App\Http\Controllers\Backend\Admin\AdminController;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::controller(AdminController::class)->group(function (){

    Route::get('admin/login', 'login')->name('admin.login')->middleware('guest');

    Route::get('admin/dashboard','index')->name('admin.dashboard')->middleware(['auth','verified','admin']);
});

