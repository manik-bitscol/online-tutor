<?php

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

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/job-circulars/{id}', [App\Http\Controllers\Admin\CircularsController::class, 'show'])->name('circular.show');
Route::get('/state/all/{id}', [\App\Http\Controllers\Member\BookController::class, 'getUpzilas'])->name('state.index');

require __DIR__ . '/auth.php';
