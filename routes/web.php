<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/to-watch', [PageController::class, 'toWatch'])->name('to-watch');

Route::get('/latest', [PageController::class, 'latest'])->name('latest');

Route::get('/detail-movie/{id}', [PageController::class, 'detailMovie'])->name('detail-movie');
