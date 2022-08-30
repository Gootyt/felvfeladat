<?php

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;

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

Route::get('/', [CarController::class, 'index']);


Route::get('/cars/create', [CarController::class, 'create']);

Route::post('/cars', [CarController::class, 'store']);

Route::get('/cars/{car}/edit', [CarController::class, 'edit']);

Route::put('/cars/{car}', [CarController::class, 'update']);

Route::delete('/cars/{car}', [CarController::class, 'destroy']);

Route::get('/rents/manage', [RentController::class, 'manage']);

Route::get('/rents/available', [RentController::class, 'available']);

Route::post('/rents/available', [RentController::class, 'availableSearch']);

Route::get('/rents/create', [RentController::class, 'create']);

Route::post('/rents', [RentController::class, 'store']);

Route::get('/rents/{rent}/edit', [RentController::class, 'edit']);

Route::put('/rents/{rent}', [RentController::class, 'update']);

Route::delete('/rents/{rent}', [RentController::class, 'destroy']);

Route::get('/rents/{rent}', [RentController::class, 'show']);

Route::get('/cars/{car}', [CarController::class, 'show']);
