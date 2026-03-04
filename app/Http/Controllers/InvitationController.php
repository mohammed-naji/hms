<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    function invitations()
    {
        return view('invitations.index');
    }
}
