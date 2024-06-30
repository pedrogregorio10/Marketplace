<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
Route::get('/', function () {
    return view('welcome');
})->name('site.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//require __DIR__.'/auth.php';

foreach(File::allFiles(__DIR__.'/web') as $route_file){
        require $route_file->getPathname();
    }
foreach (File::allFiles(__DIR__.'/auth') as $route_file) {
        require $route_file->getPathname();
}
