<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SupportController;
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
    // notify()->success('Welcome to Laravel Notify ⚡️');
    return view('homepage.index');
});

Route::get('/about', function () {
    return view('homepage.about');
});

Route::get('/services', function () {
    return view('homepage.services');
});

Route::get('/contact', function () {
    return view('homepage.contact');
});

Route::get('/quote', function () {
    return view('homepage.quote');
});

Route::get('/md', function () {
    return bcrypt('welcome');
});

Route::fallback(function () {
     return view('homepage.index');
});

Route::post('/save', [QuoteController::class, 'save']);
Route::post('/store-data', [QuoteController::class, 'store']);
Route::post('/delete_quote', [PackageController::class, 'delete_quote']);
Route::get('/quote_list', [PackageController::class, 'quote']);
Route::post('tracking_details', [QuoteController::class, 'track']);
Route::post('contact', [SupportController::class, 'sendEmail']);
Route::resource('package', PackageController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
