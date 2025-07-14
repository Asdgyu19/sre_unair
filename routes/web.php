<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\User\MerchendiseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\MerchandiseController;

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
Route::get('/shop', [MerchendiseController::class, 'shop'])->name('shop');
// Route::get('/merchandise', fn () => view('merchandise'))->name('merchandise');
Route::get('/merchandise', [MerchendiseController::class, 'publicIndex'])->name('merchandise');

// Route::get('/merchandise', [MerchandiseController::class, 'publicIndex'])->name('merchandise');

Route::get('/blog', fn () => view('blog', [
    'title' => 'Blog',
    'posts' => BlogPost::all(),
]))->name('blog');

Route::get('/posts/{post:slug}', fn (BlogPost $post) => view('post', [
    'title' => 'Single Post',
    'post' => $post,
]));

Route::get('/events', [EventController::class, 'frontend'])->name('events');


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

     /*
    |--------------------------------------------------------------------------
    | Event Management
    |--------------------------------------------------------------------------
    */
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', fn () => view('admin.events.create'))->name('events.create');
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

    /*
    |--------------------------------------------------------------------------
    | Merchandise Management
    |--------------------------------------------------------------------------
    */
    Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise.index');
    Route::get('/merchandise/create', [MerchandiseController::class, 'create'])->name('merchandise.create');
    Route::post('/merchandise', [MerchandiseController::class, 'store'])->name('merchandise.store');
    Route::get('/merchandise/{merchandise}/edit', [MerchandiseController::class, 'edit'])->name('merchandise.edit');
    Route::put('/merchandise/{merchandise}', [MerchandiseController::class, 'update'])->name('merchandise.update');
    Route::delete('/merchandise/{merchandise}', [MerchandiseController::class, 'destroy'])->name('merchandise.destroy');
    // Route::get('/merchandise', fn () => view('admin.merchandise.index'))->name('merchandise.index');
    // Route::get('/merchandise/create', fn () => view('admin.merchandise.create'))->name('merchandise.create');
    // Route::post('/merchandise', [AdminController::class, 'storeMerchandise'])->name('merchandise.store');
    // Route::put('/merchandise/{id}', [AdminController::class, 'updateMerchandise'])->name('merchandise.update');
    // Route::delete('/merchandise/{id}', [AdminController::class, 'destroyMerchandise'])->name('merchandise.destroy');

    /*
    |--------------------------------------------------------------------------
    | Project Management
    |--------------------------------------------------------------------------
    */
    Route::get('/projects', fn () => view('admin.projects.index'))->name('projects.index');
    Route::get('/projects/create', fn () => view('admin.projects.create'))->name('projects.create');
    Route::post('/projects', [AdminController::class, 'storeProject'])->name('projects.store');
    Route::put('/projects/{id}', [AdminController::class, 'updateProject'])->name('projects.update');
    Route::delete('/projects/{id}', [AdminController::class, 'destroyProject'])->name('projects.destroy');

    /*
    |--------------------------------------------------------------------------
    | Blog Management
    |--------------------------------------------------------------------------
    */
 Route::get('/blog', [BlogPostController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogPostController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogPostController::class, 'store'])->name('blog.store');
    Route::get('/blog/{blogPost}', [BlogPostController::class, 'show'])->name('blog.show');
    Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{blogPost}', [BlogPostController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy'])->name('blog.destroy');
});