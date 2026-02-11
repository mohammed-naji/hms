<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::prefix('teachers')->name('teachers.')->group(function () {
    Route::get('dashboard', [TeacherController::class, 'dashboard'])->name('dashboard');
    Route::get('students', [TeacherController::class, 'students'])->name('students');
    Route::get('subjects', [TeacherController::class, 'subjects'])->name('subjects');
    Route::get('exams', [TeacherController::class, 'exams'])->name('exams');
    Route::get('vacation', [TeacherController::class, 'vacation'])->name('vacation');
    Route::get('salary', [TeacherController::class, 'salary'])->name('salary');
});
