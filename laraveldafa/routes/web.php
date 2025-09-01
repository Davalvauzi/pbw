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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name(name: 'about.page');

Route::get('/contact', function () {
    return view('contact');
})->name(name: 'contact.page');

Route::get('/pengguna/{id}', function($id){
    return "Halaman pengguna dengan ID: " . $id;
});

Route::prefix( 'admin')->group(function(){
    Route::get('/dashboard', function() {
        return 'admin dashboard';
    });

    Route::get('/profile', function(){
        return 'admin profile';
    });
});

Route::prefix( 'manage')->group(function(){
    Route::get('/edit-profile', function() {
        return view(view: 'manage.edit');
    })->name(name: 'manage.edit');

    route::get('/add-profile', function(){
        return view(view: 'manage.add');
    })->name(name: 'manage.add');

    route::get('/profile', function() {
        return view(view: 'manage.view');
    })->name(name: 'manage.view');

});