<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\BlogPost;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('home'))->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/events', fn () => view('events'))->name('events');
Route::get('/projects', fn () => view('projects'))->name('projects');
Route::get('/education', fn () => view('education'))->name('education');
Route::get('/merchandise', fn () => view('merchandise'))->name('merchandise');

Route::get('/blog', fn () => view('blog', [
    'title' => 'Blog',
    'posts' => BlogPost::all(),
]))->name('blog');

Route::get('/posts/{post:slug}', fn (BlogPost $post) => view('post', [
    'title' => 'Single Post',
    'post' => $post,
]));


/*
|--------------------------------------------------------------------------
| Auth Routes (Login, Register)
|--------------------------------------------------------------------------
*/
Route::middleware('web')->group(function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('/register', [UserController::class, 'register'])->name('register');

    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| Admin Only Test Route
|--------------------------------------------------------------------------
*/
Route::get('/admin-test', fn () => 'Admin Masuk')->middleware(['auth', 'admin']);

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Event Management
    Route::post('/events', [AdminController::class, 'storeEvent'])->name('events.store');
    Route::put('/events/{id}', [AdminController::class, 'updateEvent'])->name('events.update');
    Route::delete('/events/{id}', [AdminController::class, 'destroyEvent'])->name('events.destroy');

    // Merchandise Management
    Route::post('/merchandise', [AdminController::class, 'storeMerchandise'])->name('merchandise.store');
    Route::put('/merchandise/{id}', [AdminController::class, 'updateMerchandise'])->name('merchandise.update');
    Route::delete('/merchandise/{id}', [AdminController::class, 'destroyMerchandise'])->name('merchandise.destroy');

    // Project Management
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('projects.store');
    Route::put('/projects/{id}', [AdminController::class, 'updateProject'])->name('projects.update');
    Route::delete('/projects/{id}', [AdminController::class, 'destroyProject'])->name('projects.destroy');

    // Blog Management
    Route::post('/blog', [AdminController::class, 'storeBlogPost'])->name('blog.store');
    Route::put('/blog/{id}', [AdminController::class, 'updateBlogPost'])->name('blog.update');
    Route::delete('/blog/{id}', [AdminController::class, 'destroyBlogPost'])->name('blog.destroy');
});
