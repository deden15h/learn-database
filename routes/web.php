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

Route::get('/', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/insert', [App\Http\Controllers\BookController::class, 'insert']);

Route::get('/update', [App\Http\Controllers\BookController::class, 'update']);

Route::get('/select', [App\Http\Controllers\EmployeeController::class, 'select']);


