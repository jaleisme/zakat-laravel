<?php

use App\Http\Controllers\DistributionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MustahikController;
use App\Http\Controllers\MustahikCategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\UserController;
use App\Models\Distribution;
use App\Models\Mustahik;
use App\Models\Muzakki;
use App\Models\Payment;
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
    $mustahikCount = count(Mustahik::all()) > 0 ? count(Mustahik::all()) : 0;
    $muzakkiCount = count(Muzakki::all()) > 0 ? count(Muzakki::all()) : 0;
    $paymentCount = count(Payment::all()) > 0 ? count(Payment::all()) : 0;
    $distributionCount = count(Distribution::where('status', '=', 1)->get()) > 0 ? count(Distribution::where('status', '=', 1)->get()) : 0;
    return view('welcome', compact(['mustahikCount', 'muzakkiCount', 'paymentCount', 'distributionCount']));
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account-settings', [App\Http\Controllers\HomeController::class, 'accountSettings'])->name('account-settings');
Route::post('/change-account-settings', [App\Http\Controllers\HomeController::class, 'changeAccountSettings'])->name('change-account-settings');

Route::resource('/mustahik', MustahikController::class)->middleware('auth');
Route::resource('/mustahik-category', MustahikCategoryController::class)->middleware('auth');
Route::resource('/payment-type', PaymentTypeController::class)->middleware('auth');
Route::resource('/payment', PaymentController::class)->middleware('auth');
Route::resource('/distribution', DistributionController::class)->middleware('auth');

Route::resource('/users', UserController::class)->middleware('auth');
