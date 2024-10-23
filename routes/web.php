<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Rahmat', 'title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    return view('post', ['title' => 'Detail Post', 'post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
