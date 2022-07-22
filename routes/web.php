<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/success', function () {
    return view('success');
})->middleware('auth')->name('success');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('courses');
Route::get('/payments', [App\Http\Controllers\HomeController::class, 'payments'])->name('payments');

Route::post('/bsit', [App\Http\Controllers\HomeController::class, 'bsit'])->name('bsit');
