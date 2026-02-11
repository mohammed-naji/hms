<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function home()
    {
        return "home page";
    }

    function about()
    {
        return "about page";
    }

    function services()
    {
        return "services page";
    }

    function contact()
    {
        return "contact page";
    }

    function users($user)
    {
        return "users $user";
    }
}
