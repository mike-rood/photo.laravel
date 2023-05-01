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

Route::group(['namespace' => 'App\Http\Livewire'], function () {
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function() {
        Route::get('/login', Login::class)->name('auth.login');
        Route::get('/register', Register::class)->name('auth.register');
    });
    Route::get('/', Index::class)->name('index');
});