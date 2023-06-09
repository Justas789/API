<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\v1\QuoteController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/api/v1/quote/random', [QuoteController::class, 'random']);
Route::get('/api/v1/quote', [QuoteController::class, 'quote']);
Route::get('/api/v1/quote/{id}', [QuoteController::class, '{id}']);
Route::get('/api/v1/quote/category/{category}', [QuoteController::class, '{category}']);
Route::post('/api/v1/quote', [QuoteController::class, 'quote']);
Route::delete('/api/quotes/{id}', [QuoteController::class, '{id}']);






Route::apiResource('/quote', QuoteController::class);
