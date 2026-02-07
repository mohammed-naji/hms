<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', function () {
    return "Admin dashboard";
});

Route::get('/admin/posts', function () {
    return "Admin posts";
});

Route::get('/admin/comments', function () {
    return "Admin comments";
});

Route::get('/admin/products', function () {
    return "Admin products";
});
