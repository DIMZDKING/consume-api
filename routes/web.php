<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

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

Route::get('/sewa', [RentalController::class, 'index']);
Route::get('/sewa/create', [RentalController::class, 'create']);
Route::post('/sewa/store', [RentalController::class, 'store'])->name('store');
Route::get('/sewa/{id}', [RentalController::class, 'show']);
Route::get('/sewa/edit/{id}', [RentalController::class, 'edit']);
Route::put('/sewa/update/{id}', [RentalController::class, 'update']);
Route::delete('/sewa/delete/{id}', [RentalController::class, 'destroy']);

