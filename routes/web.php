<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FileController::class, 'index'])->name('show.all');
Route::get('create', [FileController::class, 'create'])->name('create.new');
Route::post('store', [FileController::class, 'store'])->name('store.file');
Route::get('delete/{id}', [FileController::class, 'delete']);
