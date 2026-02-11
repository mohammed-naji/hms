<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function dashboard()
    {
        return "dashboard page";
    }

    function marks()
    {
        return "marks page";
    }

    function subjects()
    {
        return "subjects page";
    }

    function exams()
    {
        return "exams page";
    }

    function messages()
    {
        return "messages page";
    }

    function avg()
    {
        return "avg page";
    }
}
