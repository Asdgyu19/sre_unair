
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Ensure this class exists in the specified namespace
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EducationalContentController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\BodBoe\ReportController;
use App\Http\Controllers\User\MerchandiseController;
use Illuminate\Support\Facades\Auth;

// Rute Publik
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show');
})->name('blog.show');

Route::get('/events', function () {
    return view('events.index');
})->name('events');

Route::get('/events/{id}', function ($id) {
    return view('events.show');
})->name('events.show');

Route::get('/education', function () {
    return view('education.index');
})->name('education');

Route::get('/education/{slug}', function ($slug) {
    return view('education.show');
})->name('education.show');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects');

Route::get('/projects/{id}', function ($id) {
    return view('projects.show');
})->name('projects.show');

Route::get('/merchandise', function () {
    return view('merchandise.index');
})->name('merchandise');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Rute Otentikasi
Auth::routes();

// Rute yang dilindungi (membutuhkan login)
Route::middleware(['auth'])->group(function () {
    // Rute Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Rute Pengguna
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/merchandise', [MerchandiseController::class, 'index'])->name('merchandise.index');
        Route::get('/merchandise/{merchandise}', [MerchandiseController::class, 'show'])->name('merchandise.show');
        Route::get('/merchandise/{merchandise}/order', [MerchandiseController::class, 'createOrder'])->name('merchandise.order');
        Route::post('/merchandise/{merchandise}/order', [MerchandiseController::class, 'storeOrder'])->name('merchandise.order.store');
        
        Route::get('/orders', [MerchandiseController::class, 'orders'])->name('orders.index');
        Route::get('/orders/{order}', [MerchandiseController::class, 'showOrder'])->name('orders.show');
        Route::get('/orders/{order}/upload-payment', [MerchandiseController::class, 'uploadPaymentForm'])->name('orders.upload-payment');
        Route::post('/orders/{order}/upload-payment', [MerchandiseController::class, 'uploadPayment'])->name('orders.upload-payment.store');
    });
    
    // Rute Admin
    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        
        Route::resource('blog-posts', BlogPostController::class);
        Route::resource('events', EventController::class);
        Route::resource('educational-contents', EducationalContentController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('activities', ActivityController::class);
        Route::resource('merchandise', MerchandiseController::class);
        Route::resource('announcements', AnnouncementController::class);
        
    });
    
    // Rute BOD/BOE
    Route::prefix('bod-boe')->name('bod-boe.')->middleware('bod_boe')->group(function () {
        Route::get('/dashboard', function () {
            return view('bod_boe.dashboard');
        })->name('dashboard');
        
        Route::resource('reports', ReportController::class);
    });
});
