<?php

use App\Http\Controllers\Backend\Admin\AdminController;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::controller(AdminController::class)->group(function (){

    Route::get('admin/login', 'login')->name('admin.login')->middleware('guest');

    Route::get('admin/dashboard','create')->name('admin.dashboard')->middleware(['auth','verified','admin']);
    Route::get('admin/forgot-password','forgot_password')->name('admin.forgot-password')->middleware('guest');
    Route::get('admin/profile','edit')->name('admin.profile.edit')->middleware('auth');
});
