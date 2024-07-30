<?php

use App\Http\Controllers\Controller;
use App\Models\MoU;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\MoUController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;

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

Route::post('/daftar', [DaftarController::class, 'daftar'])->middleware('guest');
Route::get('/masuk', [MasukController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'masuk'])->middleware('guest');
Route::get('/keluar', [MasukController::class, 'keluar'])->middleware('auth');

Route::get('/', [Controller::class, 'index'])->name('mous.index');
Route::get('/about', [Controller::class, 'about']);

// Route untuk category dan subcategory
Route::resource('categories', CategoryController::class);
Route::resource('subcategories', SubcategoryController::class);

Route::get('/user', [Controller::class, 'user']);

Route::resource('/MoU', MoUController::class)->except('create', 'destroy')->middleware('auth');
Route::get('/dashboard', [MoUController::class, 'dashboard']);


// Route untuk menampilkan form approve
Route::get('/mous/{id}/approve', [MoUController::class, 'showApproveForm'])->name('mous.showApproveForm');

// Route untuk memproses approve
Route::post('/mous/{id}/approve', [MoUController::class, 'approve'])->name('mous.approve');

// Route untuk CRUD User
Route::resource('users', UserController::class);

// Route untu Reject MoU
Route::post('/MoU/{id}/reject', [MoUController::class, 'reject'])->name('mous.reject');
