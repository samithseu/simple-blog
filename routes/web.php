<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/blogs', function () {
    // make API request
    $response = file_get_contents('https://jsonplaceholder.typicode.com/posts');
    $posts = json_decode($response);

    return view('blogs.index', compact('posts'));
})->name("blogs");

