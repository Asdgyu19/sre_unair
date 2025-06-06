<?php

use App\Models\BlogPost;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => BlogPost::all()]);
})->name('blog');

Route::get('/posts/{post:slug}', function (BlogPost $post) {
    return view('post', ['title' => 'Single Post','post' => $post]);
});

Route::get('/merchandise', function () {
    return view('merchandise');
})->name('merchandise');
