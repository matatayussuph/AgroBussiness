<?php

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});
Route::get('logout', function () {Auth::logout();return redirect('/');})->name('signout');

Route::get('Admin/Dashboard', '\App\Http\Controllers\HomeController@index')->name('admin.dashboard');
Route::get('/otp/login', '\App\Http\Controllers\AuthOtpController@login')->name('otp.login');
Route::post('/otp/generate', '\App\Http\Controllers\AuthOtpController@generate')->name('otp.generate');
Route::get('/otp/verification/{user_id}', '\App\Http\Controllers\AuthOtpController@verification')->name('otp.verification');
Route::post('/otp/login', '\App\Http\Controllers\AuthOtpController@loginWithOtp')->name('otp.getlogin');
Route::post('resend/otp/', '\App\Http\Controllers\AuthOtpController@generate')->name('regenerate.otp');

Route::get('Sell/Farm/portifolio', '\App\Http\Controllers\FarmController@selling')->name('sell.farm');
Route::post('sell/farm/', '\App\Http\Controllers\FarmController@SellFarm')->name('create.class');
Route::post('lease/farm/', '\App\Http\Controllers\FarmController@LeaseFarm')->name('delete.class');
Route::get('Lease/farm/', '\App\Http\Controllers\FarmController@lease')->name('lease.farm');
