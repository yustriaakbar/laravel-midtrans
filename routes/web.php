<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DonationController::class, 'index'])->name('donation');
Route::get('/donatur', [DonationController::class, 'listDonatur'])->name('list.donatur');
Route::post('/donation/store', [DonationController::class, 'submitDonation'])->name('donation.store');
Route::post('/notification/handler', [DonationController::class, 'notificationHandler'])->name('notification.handler');
