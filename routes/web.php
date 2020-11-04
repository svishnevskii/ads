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

Route::get('/adverts', [App\Http\Controllers\HomeController::class, 'adverts'])->name('adverts');
Route::get('/report/{id}', [App\Http\Controllers\HomeController::class, 'report'])->name('report');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
