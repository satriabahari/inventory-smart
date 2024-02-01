<?php

use App\Http\Controllers\CattegoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductMasukController;
use App\Http\Controllers\ProductKeluarController;
use App\Http\Controllers\SupplierController;
use App\Models\Product;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [ProductController::class, 'chart'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('product', ProductController::class);
Route::resource('customer', CustomerController::class);
Route::resource('cattegory', CattegoryController::class);
Route::resource('product_masuk', ProductMasukController::class);
Route::resource('product_keluar', ProductKeluarController::class);
Route::resource('supplier', SupplierController::class);

require __DIR__.'/auth.php';