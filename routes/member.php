<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Member Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function ()
{
    return view('member.dashboard.index');

});
Route::controller(\App\Http\Controllers\Member\SavePasswordController::class)->group(function ()
{
    Route::get('/save-password-document', 'index')->name('save.password.document');
    Route::post('/store-password-document', 'store')->name('store.password.document');
    Route::delete('/delete-password-document/{id}', 'destroy')->name('delete.password.document');
});
Route::controller(App\Http\Controllers\Member\AdmitCardController::class)->group(function ()
{
    Route::get('/save-admit-document', 'index')->name('save.admit.document');
    Route::post('/store-admit-document', 'store')->name('store.admit.document');
    Route::delete('/delete-admit-document/{id}', 'destroy')->name('delete.admit.document');
});
Route::controller(App\Http\Controllers\Member\HardCopyController::class)->group(function ()
{
    Route::get('/save-hardcopy-document', 'index')->name('save.hardcopy.document');
    Route::post('/store-hardcopy-document', 'store')->name('store.hardcopy.document');
    Route::delete('/delete-hardcopy-document/{id}', 'destroy')->name('delete.hardcopy.document');
});
Route::controller(App\Http\Controllers\Member\JobCircularController::class)->group(function ()
{
    Route::get('/save-jobcircular-document', 'index')->name('save.job.document');
    Route::post('/store-jobcircular-document', 'store')->name('store.job.document');
    Route::delete('/delete-jobcircular-document/{id}', 'destroy')->name('delete.job.document');
});
Route::controller(App\Http\Controllers\Member\CvResumeController::class)->group(function ()
{
    Route::get('/member/cv', 'index')->name('member.cv.index');
    Route::get('/member/cv/create', 'create')->name('member.cv.create');

});
Route::controller(App\Http\Controllers\Member\ExamController::class)->group(function ()
{
    Route::get('/all-exam-list', 'index')->name('member.exam.list');
    Route::get('/fee-exam', 'freeExam')->name('member.free.exam');
    Route::get('/daily-exam', 'dailyExam')->name('member.daily.exam');
    Route::get('/model-test', 'modelTest')->name('member.model.test');
    Route::get('/special-model-test', 'specialModelTest')->name('member.specail.test');
    Route::get('/chapter-base-exam', 'chapterBaseExam')->name('member.chapter.test');
    Route::get('/exam/{id}', 'show')->name('member.exam.show');
    Route::post('/attempt-exam', 'attemptExam')->name('member.exam.attempt');

});
Route::get('/current-gks', [\App\Http\Controllers\Member\GKController::class, 'index'])->name('member.gk');

Route::controller(App\Http\Controllers\Member\LectureSheetController::class)->group(function ()
{
    Route::get('/all-sheets', 'index')->name('member.sheet.index');
    Route::get('/sheet/{id}', 'show')->name('member.sheet.show');

});
Route::controller(App\Http\Controllers\Member\PracticeController::class)->group(function ()
{
    Route::get('/all-questions', 'index')->name('member.practice.index');
    Route::get('/question-show/{id}', 'show')->name('member.practice.show');

});
Route::controller(App\Http\Controllers\Member\BookController::class)->group(function ()
{
    Route::get('/books', 'index')->name('member.book.index');
    Route::get('/book/{id}', 'show')->name('member.book.show');
    Route::get('/book/order/{id}', 'show')->name('member.book.order');

});