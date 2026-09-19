<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

use App\Http\Controllers\NailController;

Route::get('/admin', [NailController::class, 'create']);
Route::post('/admin/upload', [NailController::class, 'store']);


use App\Http\Controllers\AdminController;
//admin apload
Route::get('/admin/upload', [AdminController::class, 'uploadForm']);
Route::post('/admin/upload', [AdminController::class, 'upload']);

Route::get('/gallery', [AdminController::class, 'gallery']);


// EDIT
Route::get('/admin/nail/{id}/edit', [AdminController::class, 'edit']);
Route::put('/admin/nail/{id}', [AdminController::class, 'update']);

// HAPUS
Route::delete('/admin/nail/{id}', [AdminController::class, 'destroy']);

