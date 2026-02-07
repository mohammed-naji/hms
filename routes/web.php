<?php

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;

// Helper Classes
// Helper Methods

// Route::get('url', 'action');
// Route::post('url', 'action');
// Route::put('url', 'action');
// Route::patch('url', 'action');
// Route::delete('url', 'action');

// use, namespace

// Route::get('/', function () {
//     return "Homepage";
// });

// Route::get('/about', function () {
//     return "About Us";
// });

// Route::match(['put', 'patch'], '/', function () {
//     "Edit Process";
// });

// Route::fallback(function () {
//     return "Custom Error";
// });

// include __DIR__ . '/admin.php';

// Route::get('/', function () {
//     return "Homepage 1";
// });

// Route::get('/about-us', function () {
//     return view('about');
// });

// Route::view('/about-us', 'about');

// Route::get('/course/{name}/{hours?}', function ($name, $hours = 40) {
//     return "$name course with $hours hours";
// });


Route::get('/', function () {
    return "Homepage";
});

Route::get('/about', function () {
    return "About Page";
});

Route::get('/team', function () {
    return "Team Page";
});

Route::get('/services', function () {
    return "Services Page";
});

Route::get('/contact', function () {
    return "Contact Page";
});

Route::post('/contact', function () {
    return "Contact Page";
});

Route::get('/calculate-age/{dob}', function ($dob) {

    $now = new DateTime();
    $diff = $now->diff(new DateTime($dob));

    dd($diff);

    // list($year, $month, $day) = explode('-', $dob);

    // $years = date('Y') - $year;

    // $months = date('m') - $month;

    // $days = date('d') - $day;

    // if ($months < 0) {
    //     $years--;
    //     $months += 12;
    // }

    // dd($years, $months, $days);
    // echo "Your age in years = $years<br>
    //     Your age in months = $months<br>
    //     Your age in days = $days<br>";
    // dd($years);
});
