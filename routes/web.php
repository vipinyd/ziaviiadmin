<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/index', function () {
    return view('admin.transaction.index');
});


Route::prefix('admin')->group(function () {
    Route::get('/user',[UserController::class, 'index'])->name('index');





    Route::get('/booking',[BookingController::class, 'index'])->name('index');





    Route::get('/transaction',[TransactionController::class, 'index'])->name('index');
});