<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/blogs', [BlogController::class, "index"])->name("blogs");
Route::get('/blogs/{id}', [BlogController::class, "show"])->name("blog");

