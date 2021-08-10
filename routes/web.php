<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\EmailController;


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
Route::post('/tender/setWinner', [TenderController::class, 'setWinner'])->name("tender-setWinner");
Route::post('/tender/nextSubStatus', [TenderController::class, 'nextSubstatus'])->name("tender-substatus-next");
Route::post('/tender/nextStatus', [TenderController::class, 'nextStatus'])->name("tender-status-next");

Route::get('/tenders', [TenderController::class, 'showTenders'])->name("tenders-list");

Route::get('/tender/{id}', [TenderController::class, 'showTender'])->name("tenders-info");
Route::get('/tender/get/{id}', [TenderController::class, 'getTender'])->name("tender-get");


Route::post('/review/hide', [TenderController::class, 'hideReview'])->name("review-hide");
Route::post('/review/unhide', [TenderController::class, 'unhideReview'])->name("review-unhide");

//CHAT
Route::get('/chat', [TenderController::class, 'showChat'])->name("chat");
Route::post('/chat/{id}/message', [TenderController::class, 'sendMessage'])->name("chat-message-send");
Route::get('/chat/{id}/messages', [TenderController::class, 'getMessages'])->name("chat-messages-get");
Route::post('/chat/newRoom', [TenderController::class, 'createRoom'])->name("chat-new");

Route::post('/chat/message/{id}/accept', [TenderController::class, 'messageAccept'])->name("msg-accept");
Route::post('/chat/message/{id}/decline', [TenderController::class, 'messageDecline'])->name("msg-decline");

//CURRENCY
Route::post('/currency/update', [CurrencyController::class, 'update'])->name("currency-update");

//EMAIL
Route::post('/email/send', [EmailController::class, 'sendMessage'])->name("email-send");


require __DIR__.'/auth.php';
