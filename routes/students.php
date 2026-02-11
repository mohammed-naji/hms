<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('students')->name('students.')->group(function () {
    Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::get('marks', [StudentController::class, 'marks'])->name('marks');
    Route::get('subjects', [StudentController::class, 'subjects'])->name('subjects');
    Route::get('exams', [StudentController::class, 'exams'])->name('exams');
    Route::get('messages', [StudentController::class, 'messages'])->name('messages');
    Route::get('avg', [StudentController::class, 'avg'])->name('avg');
});
