<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Artisan;
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


// Route::get('/', function () {
//     return "Homepage";
// });

// Route::get('/about', function () {
//     return "About Page";
// });

// Route::get('/team', function () {
//     return "Team Page";
// });

// Route::get('/services', function () {
//     return "Services Page";
// });

// Route::get('/contact', function () {
//     return "Contact Page";
// });

// Route::post('/contact', function () {
//     return "Contact Page";
// });

// Route::get('/calculate-age/{dob}', function ($dob) {

//     $now = new DateTime();
//     $diff = $now->diff(new DateTime($dob));

//     dd($diff);

//     // list($year, $month, $day) = explode('-', $dob);

//     // $years = date('Y') - $year;

//     // $months = date('m') - $month;

//     // $days = date('d') - $day;

//     // if ($months < 0) {
//     //     $years--;
//     //     $months += 12;
//     // }

//     // dd($years, $months, $days);
//     // echo "Your age in years = $years<br>
//     //     Your age in months = $months<br>
//     //     Your age in days = $days<br>";
//     // dd($years);
// });

// Route::get('/user/{username}/{age}', function ($username, $age) {
//     return "Welcome user: $username, your age is $age";
// })->whereNumber('age')->name('user');

// Route::get('/', function () {

//     // return "<a href='/about-us'>About Us</a>";
//     // $url = url('about-me');
//     $inp1 = 'abc999';
//     $inp2 = 14;
//     // $url = url('/user/' . $user . '/' . $age);
//     // $url = route('user', ['age' => $age, 'username' => $user]);
//     $url = route('user', ['username' => $inp1, 'age' => $inp2]);
//     return "<a href='$url'>About Us</a>";
// });

// Route::get('/about', function () {
//     return "About Page";
// })->name('aboutpage');

// Route::get('/home', [MainController::class, 'home'])->name('home');

// Route::get('/about', [MainController::class, 'about'])->name('about');

// Route::get('/services', [MainController::class, 'services'])->name('services');

// Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Route::get('/users/{user}', [MainController::class, 'users'])->name('users');







// students/dashboard
// students/marks
// students/subjects
// students/exams
// students/messages
// students/avg

// teachers/students
// teachers/subjects
// teachers/exams
// teachers/vacation
// teachers/salary

// admins/students
// admins/teachers
// admins/subjects
// admins/levels
// admins/messages

// index, teachers, courses, courses/id, contact
Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/teachers', [SiteController::class, 'teachers'])->name('teachers');
// Route::get('/courses', [SiteController::class, 'courses'])->name('courses');
// Route::get('/courses/{id}', [SiteController::class, 'courses_single'])->name('courses_single');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');



Route::get('/creative', [CreativeController::class, 'index'])->name('creative.index');

Route::prefix('business')->name('business.')->group(function () {
    Route::get('/', [BusinessController::class, 'index'])->name('index');
    Route::get('/about', [BusinessController::class, 'about'])->name('about');
    Route::get('/products', [BusinessController::class, 'products'])->name('products');
    Route::get('/store', [BusinessController::class, 'store'])->name('store');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/post', [BlogController::class, 'post'])->name('post');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
    Route::post('/contact', [BlogController::class, 'contact_data']);
});

Route::prefix('personal')->name('personal.')->group(function () {
    Route::get('/', [PersonalController::class, 'index'])->name('index');
    // Route::get('/about', [PersonalController::class, 'about'])->name('about');
    // Route::get('/post', [PersonalController::class, 'post'])->name('post');
    // Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
});

Route::get('form1', [FormController::class, 'form1'])->name('forms.form1');
Route::post('form1', [FormController::class, 'form1_data']);

Route::get('form2', [FormController::class, 'form2'])->name('forms.form2');
Route::post('form2', [FormController::class, 'form2_data']);

Route::get('course/add', [FormController::class, 'add_course'])->name('forms.add_course');
Route::post('course/add', [FormController::class, 'add_course_data']);

Route::get('form3', [FormController::class, 'form3'])->name('forms.form3');
Route::post('form3', [FormController::class, 'form3_data']);

Route::get('dropzone', [FormController::class, 'dropzone'])->name('forms.dropzone');
Route::post('dropzone', [FormController::class, 'dropzone_data']);


Route::get('/invitations', [InvitationController::class, 'invitations'])->name('invitations');
Route::post('/invitations', [InvitationController::class, 'send_invitations']);


// CRUD
// // Create
// Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
// Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

// // Read
// Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// // Update
// Route::get('courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
// Route::match(['put', 'patch'], '/courses/{id}', [CourseController::class, 'update'])->name('courses.update');

// // Delete
// Route::delete('courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::resource('courses', CourseController::class);
