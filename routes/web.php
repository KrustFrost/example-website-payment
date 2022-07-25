<?php

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

Route::get('/cancel', function () {
    return view('cancel');
})->middleware('auth')->name('cancel');
Route::get('/card', function () {
    return view('card');
})->middleware('auth')->name('card');


Auth::routes();
Route::get('/success', [App\Http\Controllers\HomeController::class, 'success'])->name('success');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::get('/payments', [App\Http\Controllers\HomeController::class, 'payments'])->name('payments');

Route::post('/bsit', [App\Http\Controllers\HomeController::class, 'bsit'])->name('bsit');
