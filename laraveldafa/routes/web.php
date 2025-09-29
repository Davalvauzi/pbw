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

// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/product/create', [ProductController::class, 'create']);
// Route::post('/product', [ProductController::class, 'store']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
// Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
// Route::put('/product/{id}', [ProductController::class, 'update']);
// Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::middleware(['auth', 'role:admin,owner'])->group(function () {
    Route::get('/products/{angka}', [ProductController::class, 'index']);
});

Route::get('/route_count/{id}', [BarangController::class, 'index']);
route::get('/product', [ProductController::class, 'indexproduk']);

route::get('/uts', [UtsController::class, 'index']);
