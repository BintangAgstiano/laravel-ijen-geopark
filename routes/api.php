<?php

use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\DestinasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/destinasi/{slug}', [DestinasiController::class,'detail']);

Route::get('/berita', [BeritaController::class,'index']);
Route::get('/berita/{slug}', [BeritaController::class,'detail']);
