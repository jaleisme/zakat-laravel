<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MustahikController;
use App\Http\Controllers\MustahikCategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use Illuminate\Support\Facades\Auth;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/mustahik', MustahikController::class)->middleware('auth');
Route::resource('/mustahik-category', MustahikCategoryController::class)->middleware('auth');
Route::resource('/payment-type', PaymentTypeController::class)->middleware('auth');
Route::resource('/payment', PaymentController::class)->middleware('auth');

// Payment Type
// Route::get('/payment-type',[PaymentTypeController::class, 'payment_type'])->name('payment-type');

// Route::get('/tambahdatapymenttype',[PaymentTypeController::class, 'tambahdatapymenttype'])->name('tambahdatapymenttype');
// Route::post('/insertdatapymenttype',[PaymentTypeController::class, 'insertdatapymenttype'])->name('insertdatapymenttype');

// Route::get('/tampildatapymenttype/{id}',[PaymentTypeController::class, 'tampildatapymenttype'])->name('tampildatapymenttype');
// Route::post('/editdatapymenttype/{id}',[PaymentTypeController::class, 'editdatapymenttype'])->name('editdatapymenttype');

// Route::get('/deletedatapymenttype/{id}',[PaymentTypeController::class, 'deletedatapymenttype'])->name('deletedatapymenttype');
