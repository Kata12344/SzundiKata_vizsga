<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use App\Models\Szavak;
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
Route::get('/tema', [TemaController::class, 'index']);
Route::get('/szavak', [SzavakController::class, 'index']);
Route::get('/minden', [SzavakController::class, 'minden']);
Route::get('/', function () {
    return view('index');
});
