<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UtsController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return "Selamat datang, Admin!";
//     });
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/dashboard', function () {
//         return "Selamat datang, User!";
//     });
// });

Route::get('/dasboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'RoleCheck:admin'])->name('dashboard');

Route::get('/produk/{nilai}', [ProductController::class, 'index']);

Route::get('/route_count/{id}', [BarangController::class, 'index']);
route::get('/product', [ProductController::class, 'indexproduk'])->name('product-index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
route::post('/product', [ProductController::class, 'store'])->name('product-store');
route::get('/product/{id}', [ProductController::class, 'show'])->name('product-show');
route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
route::put('/product/{id}', [ProductController::class, 'update'])->name('product-update');
route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-destroy');
// route untuk export data ke excel
Route::get('/products/export', [ProductController::class, 'exportExcel'])->name('products.export');

route::get('/uts', [UtsController::class, 'index']);
route::get('/web', [UtsController::class, 'web']);
route::get('/database', [UtsController::class, 'database']);
