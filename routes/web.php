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

Route::get('/', [\App\Http\Controllers\FeedbacksController::class, 'index'])->name('feedbacks.index');
Route::post('/', [\App\Http\Controllers\FeedbacksController::class, 'store'])->name('feedbacks.store');
Route::get('/show', [\App\Http\Controllers\FeedbacksController::class, 'show'])->name('feedbacks.show');

