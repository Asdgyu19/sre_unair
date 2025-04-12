
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Ensure this class exists in the specified namespace
use Illuminate\Support\Facades\Auth;

// Rute Publik
Route::get('/', function () {
    return view('welcome');
})->name('home');

