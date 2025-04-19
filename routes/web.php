<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
    return view('blog');
})->name('blog');

Route::get('/merchandise', function () {
    return view('merchandise');
})->name('merchandise');
