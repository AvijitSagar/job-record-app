<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\JobRecordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', [JobRecordController::class, 'create'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/jobrecord', [JobRecordController::class, 'store'])->name('record.job');
    Route::get('/record-list', [JobRecordController::class, 'index'])->name('list.record.job');
    Route::get('/edit-record/{id}', [JobRecordController::class, 'edit'])->name('record.edit');
    Route::post('/update-record/{id}', [JobRecordController::class, 'update'])->name('record.update');
    Route::get('/delete-record/{id}', [JobRecordController::class, 'destroy'])->name('record.delete');
    Route::get('/show-record/{id}', [JobRecordController::class, 'show'])->name('record.show');

    // Route::resource('feedback', FeedbackController::class);
    Route::get('/feedback/{id}', [FeedbackController::class, 'create'])->name('create.feedback');
    Route::post('/feedback-add/{id}', [FeedbackController::class, 'store'])->name('store.feedback');
    Route::get('/feedback-edit/{id}', [FeedbackController::class, 'edit'])->name('edit.feedback');
    Route::post('/feedback-update/{id}', [FeedbackController::class, 'update'])->name('update.feedback');
});

require __DIR__.'/auth.php';
