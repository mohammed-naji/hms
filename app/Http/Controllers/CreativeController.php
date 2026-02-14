<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    function index()
    {
        return view('creative.index');
    }
}
