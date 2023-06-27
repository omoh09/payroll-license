<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/licence/all', [ApiController::class, 'index']);
Route::get('/licence{id}', [ApiController::class, 'show']);
Route::post('/licence', [ApiController::class, 'create']);
Route::post('/licence/request', [ApiController::class, 'request']);