<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
    });

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});


Route::get('/blog', function () {
    return view('blogs', ['title' => 'Blog']);
});

Route::get('/blog/{blog:slug}', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/author/{user}', function (User $user) {
    return view('blogs', ['title' => 'Articles by ' . $user->name]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
