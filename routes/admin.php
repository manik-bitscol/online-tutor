<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::controller(App\Http\Controllers\Admin\AdminController::class)->group(function ()
{
    Route::get('/', 'index')->name('admin.dashboard');
});
Route::controller(App\Http\Controllers\Admin\BookController::class)->group(function ()
{
    Route::get('/books', 'index')->name('book.index');
    Route::get('/book/create', 'create')->name('book.create');
    Route::post('/book/store', 'store')->name('book.store');
    Route::get('/book/edit/{id}', 'edit')->name('book.edit');
    Route::put('/book/update/{id}', 'update')->name('book.update');
    Route::delete('/book/delete/{id}', 'destroy')->name('book.delete');
});
Route::controller(App\Http\Controllers\Admin\CircularsController::class)->group(function ()
{
    Route::get('/job-circulars', 'index')->name('job.index');
    Route::get('/job-circular/create', 'create')->name('job.create');
    Route::post('/job-circular/store', 'store')->name('job.store');
    Route::get('/job-circular/edit/{id}', 'edit')->name('job.edit');
    Route::put('/job-circular/update/{id}', 'update')->name('job.update');
    Route::delete('/job-circular/delete/{id}', 'destroy')->name('job.delete');
});
Route::controller(App\Http\Controllers\Admin\CircularsController::class)->group(function ()
{
    Route::get('/job-circulars', 'index')->name('job.index');
    Route::get('/job-circular/create', 'create')->name('job.create');
    Route::post('/job-circular/store', 'store')->name('job.store');
    Route::get('/job-circular/edit/{id}', 'edit')->name('job.edit');
    Route::put('/job-circular/update/{id}', 'update')->name('job.update');
    Route::delete('/job-circular/delete/{id}', 'destroy')->name('job.delete');
});
Route::get('/exam/subject/{id}', [\App\Http\Controllers\Admin\ExamController::class, 'topics'])->name('exam.topics');
Route::resource('/subjects', \App\Http\Controllers\Admin\SubjectController::class);
Route::resource('/topics', \App\Http\Controllers\Admin\TopicController::class);
Route::resource('/districts', \App\Http\Controllers\Admin\DistrictController::class);
Route::resource('/upzilas', \App\Http\Controllers\Admin\UpazilaController::class);

Route::resource('/exams', \App\Http\Controllers\Admin\ExamController::class);
Route::post('/upload/excel', [\App\Http\Controllers\Admin\QuestionController::class, 'excel'])->name('admin.question.excel');
Route::resource('/questions', \App\Http\Controllers\Admin\QuestionController::class);
Route::resource('/sheets', \App\Http\Controllers\Admin\LectureSheetController::class);
Route::resource('/gks', \App\Http\Controllers\Admin\CurrentGKController::class);