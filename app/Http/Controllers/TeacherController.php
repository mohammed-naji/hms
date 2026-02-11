<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function dashboard()
    {
        return view('dashboard');
    }

    function students()
    {
        return "students page";
    }

    function subjects()
    {
        return "subjects page";
    }

    function exams()
    {
        return "exams page";
    }

    function vacation()
    {
        return "vacation page";
    }

    function salary()
    {
        return "salary page";
    }
}
