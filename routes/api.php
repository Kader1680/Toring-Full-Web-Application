<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\PostStorieController;
use App\Http\Controllers\StorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::patch('/stories/{id}', [StorieController::class, 'edit']);

// Route::delete('/stories/{id}', [StorieController::class, 'delete'])->name("stories");

