<?php

use App\Http\Controllers\CountController;
use App\Http\Controllers\ZodiacController;
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

Route::get('/', [ZodiacController::class, 'form'])->name('form');
Route::post('/result', [ZodiacController::class, 'result'])->name('result');
Route::get('/count', [CountController::class, 'count'])->name('count');
Route::post('/count-result', [CountController::class, 'countResult'])->name('countResult');
