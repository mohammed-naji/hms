<?php

namespace App\Http\Controllers;

use App\Mail\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationController extends Controller
{
    function invitations()
    {
        return view('invitations.index');
    }

    function send_invitations(Request $request)
    {
        // dd($request->all());
        $users = $request->users;

        foreach ($users as $user) {
            Mail::to($user['email'])->send(new Invitation($user));
        }

        return response()->json([
            'status' => true,
            'message' => 'تم ارسال الدعوات بنجاح'
        ], 201);
    }
}
