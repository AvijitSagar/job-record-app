<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobRecordController;
use App\Http\Controllers\ProfileController;
use App\Models\JobRecord;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [JobRecordController::class, 'create'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/jobrecord', [JobRecordController::class, 'store'])->name('record.job');
    Route::get('/record-list', [JobRecordController::class, 'index'])->name('list.record.job');
    Route::get('/edit-record/{id}', [JobRecordController::class, 'edit'])->name('record.edit');
    Route::post('/update-record/{id}', [JobRecordController::class, 'update'])->name('record.update');
    Route::get('/delete-record/{id}', [JobRecordController::class, 'destroy'])->name('record.delete');
});

require __DIR__.'/auth.php';
