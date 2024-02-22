<?php

use App\Http\Controllers\LandingController;
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

Route::get('lang/{locale}', [LandingController::class,'lang'])->name('lang');
Route::get('/', [LandingController::class,'index'])->name('landing');
Route::get('/news-update', [LandingController::class,'newsUpdate'])->name('news-update');
Route::get('/news-update/{slug}', [LandingController::class,'newsUpdateDetail'])->name('news-update-detail');