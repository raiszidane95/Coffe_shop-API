<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/products', [ProdukController::class, 'index']);
Route::get('/products/create', [ProdukController::class, 'create']);
Route::post('/products', [ProdukController::class, 'store']);
Route::get('/products/{id}/edit', [ProdukController::class, 'edit']);
Route::put('/products/{id}', [ProdukController::class, 'update']);
Route::delete('/products/{id}', [ProdukController::class, 'destroy']);
