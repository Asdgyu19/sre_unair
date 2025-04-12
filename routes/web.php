
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

