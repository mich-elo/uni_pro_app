<?php

use App\Http\Controllers\ProfileController;
use App\Models\OccurrenceBook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocketController;
use App\Models\Docket;
use App\Http\Controllers\OccurrenceBookController;
use App\Http\Controllers\DailyRegisterController;
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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/*
Routes for OccurrenceBook
*/


/**
 * NOTE TO BILLS 
 * 
 * Read the laravel documentation on controllers to understand what this code does
 */
 Route::resources([
    'occurrence' => OccurrenceBookController::class,
    'docket' => DocketController::class,
    'daily-register' => DailyRegisterController::class
]);
