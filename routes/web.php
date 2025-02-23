<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// root - home
Route::get('/', function () {
    return view('welcome');
})->name("home");

// about
Route::get('/about', function () {
    return view('about');
})->name("about");

// projects
Route::get('/projects', function () {
    return view('projects');
})->name("projects");

// auth
Route::get('/register', [AuthController::class, "showRegister"])->name("auth.show.register");
Route::get('/login', [AuthController::class, "showLogin"])->name("auth.show.login");

// blogs
Route::get('/blogs', [BlogController::class, "index"])->name("blogs");
Route::get('/blogs/create', [BlogController::class, "create"])->name("blog.create");
Route::get('/blogs/{blog}', [BlogController::class, "show"])->name("blog.show");

