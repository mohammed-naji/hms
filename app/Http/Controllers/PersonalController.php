<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    function index()
    {
        return view('personal.index');
    }
}
