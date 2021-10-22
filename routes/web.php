<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProviderController;

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
    $displayProducts = \App\Models\ProductDisplay::with('product', 'product.attachments')->get();
    $displayCategories = \App\Models\CategoryDisplay::with('category')->get();

    return view('welcome', ['displayProducts'=>$displayProducts,'displayCategories'=>$displayCategories]);
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
Route::post('/tender/update', [TenderController::class, 'updateTender'])->name("tender-update");

Route::get('/tenders', [TenderController::class, 'showTenders'])->name("tenders-list");

Route::get('/tender/{id}', [TenderController::class, 'showTender'])->name("tenders-info");
Route::get('/tender/get/{id}', [TenderController::class, 'getTender'])->name("tender-get");


Route::post('/review/hide', [TenderController::class, 'hideReview'])->name("review-hide");
Route::post('/review/unhide', [TenderController::class, 'unhideReview'])->name("review-unhide");

Route::get('/user-review/get-rating/{id}',[TenderController::class, 'getUserRating'])->name("user-review-rating-get");

//PRODUCT
Route::get('/products', [ProductController::class, 'productList'])->name("product-list");
Route::get('/product-card/{id}', [ProductController::class, 'productCart'])->name("product-cart");
Route::get('/product/new', [ProductController::class, 'productNew'])->name("product-new");
Route::post('/product/create', [ProductController::class, 'createProduct'])->name("product-create");
Route::get('/product-edit/{id}', [ProductController::class, 'editProduct'])->name("product-edit");
Route::get('/product/search/{product}', [ProductController::class, 'searchProducts'])->name("product-search");
Route::post('/products/create', [ProductController::class, 'createProducts'])->name("products-create");
Route::get('/my-products', [ProductController::class, 'productMyList'])->name("products-my-list");
//CHAT
Route::get('/chat', [TenderController::class, 'showChat'])->name("chat");
Route::post('/chat/{id}/message', [TenderController::class, 'sendMessage'])->name("chat-message-send");
Route::get('/chat/{id}/messages', [TenderController::class, 'getMessages'])->name("chat-messages-get");
Route::post('/chat/newRoom', [TenderController::class, 'createRoom'])->name("chat-new");

Route::post('/chat/message/{id}/accept', [TenderController::class, 'messageAccept'])->name("msg-accept");
Route::post('/chat/message/{id}/decline', [TenderController::class, 'messageDecline'])->name("msg-decline");

//ACCOUNT
Route::get('/account/{id?}', [AccountController::class, 'showAccount'])->name("account");
Route::get('/account-settings/{id?}', [AccountController::class, 'showAccountSettings'])->name("account-settings");
Route::get('/account-factory', [AccountController::class, 'showAccountAddFactory'])->name("account-factory");
Route::get('/account-factory/list', [AccountController::class, 'showAccountFactory'])->name("account-factory-list");
Route::post('/account-settings/save', [AccountController::class, 'saveAccountSettings'])->name("account-settings-save");
Route::post('/account/photo-upload', [AccountController::class, 'uploadPhoto'])->name("account-photo-upload");
Route::post('/account/factory-save', [AccountController::class, 'saveFactory'])->name("account-factory-save");

//CURRENCY
Route::post('/currency/update', [CurrencyController::class, 'update'])->name("currency-update");

//EMAIL
Route::post('/email/send', [EmailController::class, 'sendMessage'])->name("email-send");

//PROVIDER
Route::get('/manufacturer-list', [ProviderController::class, 'showProvidersList'])->name("manufacturer-list");
Route::get('/manufacturer/{id}', [ProviderController::class, 'showProvider'])->name("manufacturer");


require __DIR__.'/auth.php';
