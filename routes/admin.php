<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Route::prefix('/admin')->name('admin.')->group(function () {
//     Route::get('/dashboard', function () {
//         return "Admin dashboard";
//     })->name('dashboard');

//     Route::get('/posts', function () {
//         return "Admin posts";
//     })->name('posts');

//     Route::get('/comments', function () {
//         return "Admin comments";
//     })->name('comments');

//     Route::get('/products', function () {
//         return "Admin products";
//     })->name('products');
// });



// admins/students
// admins/teachers
// admins/subjects
// admins/levels
// admins/messages

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('students', [AdminController::class, 'students'])->name('students');
    Route::get('teachers', [AdminController::class, 'teachers'])->name('teachers');
    Route::get('subjects', [AdminController::class, 'subjects'])->name('subjects');
    Route::get('levels', [AdminController::class, 'levels'])->name('levels');
    Route::get('messages', [AdminController::class, 'messages'])->name('messages');
});
