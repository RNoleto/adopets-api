<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SpeciesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('animals', [AnimalController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::prefix('species')->group(function () {
    Route::get('/', [SpeciesController::class, 'index']);
    Route::post('/', [SpeciesController::class, 'store']);
    Route::get('/{id}', [SpeciesController::class, 'show']);
    Route::put('/{id}', [SpeciesController::class, 'update']);
    Route::delete('/{id}', [SpeciesController::class, 'destroy']);
});
