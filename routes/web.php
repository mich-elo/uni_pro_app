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

Route::view('/OccurrenceBook/searchOccurrenceBook', 'OccurrenceBook.searchOccurrenceBook')->name('OccurrenceBook.searchOccurrenceBook');
Route::view('/OccurrenceBook/createOccurrenceBook', 'OccurrenceBook.createOccurrenceBook')->name('OccurrenceBook.createOccurrenceBook');
Route::view('/OccurrenceBook/createOccurrenceBook', 'OccurrenceBook.createOccurrenceBook')->name('OccurrenceBook.createOccurrenceBook');
Route::view('/OccurrenceBook/tableOccurrenceBook', 'OccurrenceBook.tableOccurrenceBook')->name('OccurrenceBook.tableOccurrenceBook');


/*
Routes for Daily Register
*/
Route::view('daily_register', 'daily_register.daily_register')->name('daily_register.daily_register');
Route::view('/OccurrenceBook/createOccurrenceBook', 'OccurrenceBook.createOccurrenceBook')->name('OccurrenceBook.createOccurrenceBook');
Route::view('/OccurrenceBook/createOccurrenceBook', 'OccurrenceBook.createOccurrenceBook')->name('OccurrenceBook.createOccurrenceBook');
Route::view('/OccurrenceBook/tableOccurrenceBook', 'OccurrenceBook.tableOccurrenceBook')->name('OccurrenceBook.tableOccurrenceBook');

/*
Routes for Docket
*/
Route ::get('/Docket/searchDocket', function (){
    return view('Docket.searchDocket');
}) ->name('Docket.searchDocket');

Route::get('/Docket/createDocket', [DocketController::class, 'create'])->name('Docket.createDocket');
Route::post('/create-occurrence-book', [OccurrenceBookController::class, 'store'])->name('createOccurrenceBook.store');




Route::get('/occurrence-book/table', [OccurrenceBookController::class, 'create'])->name('occurrence-book.table');
