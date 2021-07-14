<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//TENDER
Route::post('/tender/create', [TenderController::class, 'createTender'])->name("tender-create");
Route::post('/tender/review/create', [TenderController::class, 'createReview'])->name("tender-review-create");

Route::get('/tenders', [TenderController::class, 'showTenders'])->name("tenders-list");

Route::get('/tender/{id}', [TenderController::class, 'showTender'])->name("tenders-info");
Route::get('/tender/get/{id}', [TenderController::class, 'getTender'])->name("tender-get");


Route::post('/review/hide', [TenderController::class, 'hideReview'])->name("review-hide");
Route::post('/review/unhide', [TenderController::class, 'unhideReview'])->name("review-unhide");


require __DIR__.'/auth.php';
