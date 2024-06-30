<?php

use App\Http\Controllers\Backend\Vendor\VendorController;
use Illuminate\Support\Facades\Route;

//Vendor Route
Route::get('vendor/dashboard',[VendorController::class,'index'])->name('vendor.dashboard')->middleware(['auth','verified','vendor']);
