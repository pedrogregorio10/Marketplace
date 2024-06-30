<?php

use App\Http\Controllers\Backend\Admin\AdminController;
use Illuminate\Support\Facades\Route;

//Admin Routes
Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard')->middleware(['auth','verified','admin']);
