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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-caso-1', [App\Http\Controllers\HomeController::class, 'caso1']);
Route::get('/get-caso-2', [App\Http\Controllers\HomeController::class, 'caso2']);
Route::get('/get-caso-3', [App\Http\Controllers\HomeController::class, 'caso3']);