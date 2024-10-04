<?php

use App\Http\Controllers\NewsLocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [NewsLocationController::class, 'index']);
Route::post('/', [NewsLocationController::class, 'search'])->name('news.search');