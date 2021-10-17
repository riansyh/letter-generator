<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PDFController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/store', [LoginController::class, 'store'])->name('store');
Route::get('/user', [LoginController::class, 'user'])->middleware('auth:sanctum');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
Route::get('/generate', [PagesController::class, 'generate'])->name('generate');
Route::get('/manage', [PagesController::class, 'manage'])->middleware('auth:sanctum')->name('manage');
Route::get('/edit', [PagesController::class, 'edit'])->middleware('auth:sanctum')->name('edit');
Route::get('/add', [PagesController::class, 'add'])->middleware('auth:sanctum')->name('add');

Route::post('/result', [PDFController::class, 'index'])->name('result');
