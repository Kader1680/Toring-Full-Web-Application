<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\PostStorieController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StorieController;
use App\Http\Controllers\userContoller;
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

// Route::get('/{id}', [StorieController::class, 'show']);
Route::get('/stories', [StorieController::class, 'allStories'])->name("all")->middleware("auth");
Route::post('/post', [PostStorieController::class, 'PostStory'])->name("create")->middleware("auth");
Route::get('/post', [PostStorieController::class, 'FormStory'])->middleware("auth");

Route::post('/register', [AuthenticateController::class, 'register'])->name("register");
Route::get('/register', [AuthenticateController::class, 'registerPage']);
Route::get('/', [AuthenticateController::class, 'loginPage']);
Route::post('/', [AuthenticateController::class, 'login'])->name("login");
Route::get('/logout', [AuthenticateController::class, 'logout'])->name("logout");

Route::get('/profil', [ProfilController::class, 'profil'])->middleware("auth");
