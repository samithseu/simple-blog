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
Route::post('/logout', [AuthController::class, "logout"])->name("auth.logout");
Route::middleware("guest")->controller(AuthController::class)->group(function () {
    Route::get('/register', "showRegister")->name("auth.show.register");
    Route::post('/register', "register")->name("auth.register");
    Route::get('/login', "showLogin")->name("auth.show.login");
    Route::post('/login', "login")->name("auth.login");
});

// blogs
Route::middleware("auth")->controller(BlogController::class)->group(function () {
    Route::get('/blogs', "index")->name("blogs");
    Route::get('/blogs/create', "create")->name("blog.create");
    Route::get('/blogs/{blog}', "show")->name("blog.show");
});

