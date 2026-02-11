<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function students()
    {
        return "students page";
    }

    function teachers()
    {
        return "teachers page";
    }

    function subjects()
    {
        return "subjects page";
    }

    function levels()
    {
        return "levels page";
    }

    function messages()
    {
        return "messages page";
    }
}
