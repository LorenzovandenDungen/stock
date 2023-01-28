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

Route::get('stocks', [App\Http\Controllers\StockController::class, 'index']);
Route::get('stocks/create', [App\Http\Controllers\StockController::class, 'create']);
Route::get('stocks/store', [App\Http\Controllers\StockController::class, 'store']);


