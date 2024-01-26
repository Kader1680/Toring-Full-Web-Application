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
Route::get('/all', [StorieController::class, 'allStories'])->name("all");
Route::post('/', [PostStorieController::class, 'PostStory'])->name("create");
Route::get('/', [PostStorieController::class, 'FormStory']);
Route::get('/sdddd', [PostStorieController::class, 'w']);
Route::post('/register', [AuthenticateController::class, 'register'])->name("register");
Route::get('/register', [AuthenticateController::class, 'registerPage']);
Route::get('/login', [AuthenticateController::class, 'loginPage']);
Route::post('/login', [AuthenticateController::class, 'login'])->name("login");
Route::get('/profil', [ProfilController::class, 'profil']);
