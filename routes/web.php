<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InboundController;
use App\Http\Controllers\OutboundController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\SupplierController;
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
    return redirect('/dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('dashboard', DashboardController::class)->middleware(['auth', 'verified']);
Route::resource('product', ProductController::class);
Route::resource('customer', CustomerController::class);
Route::resource('category', CategoryController::class);
Route::resource('inbound', InboundController::class);
Route::resource('outbound', OutboundController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('statistic', StatisticController::class);

require __DIR__ . '/auth.php';
