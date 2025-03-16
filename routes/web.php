<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return redirect('/admin/login');
});



Route::get('/test', [ProductController::class, 'index']);
