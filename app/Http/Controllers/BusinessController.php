<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    function index()
    {
        return view('business.index');
    }

    function about()
    {
        return view('business.about');
    }

    function products()
    {
        return view('business.products');
    }

    function store()
    {
        return view('business.store');
    }
}
