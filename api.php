<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/pelanggan3', 'Pelanggan3Controller@store');
Route::post('/produk3', 'Produk3Controller@store');
Route::post('/petugas3', 'Petugas3Controller@store');
Route::post('/transaksi3', 'Transaksi3Controller@store');
Route::post('/detail_transaksi3', 'Detail_Transaksi3Controller@store');


