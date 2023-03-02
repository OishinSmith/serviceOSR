<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookTimeController;
use App\Http\Controllers\PaymentController;

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
//     return view('login');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/bookTime/{id}', [BookTimeController::class, 'index']);

Route::post('/payment', [PaymentController::class, 'index'])->name('payment');