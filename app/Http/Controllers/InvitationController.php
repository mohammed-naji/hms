<?php

namespace App\Http\Controllers;

use App\Jobs\SendInvitation;
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

        // foreach ($users as $index => $user) {
        //     // Mail::to($user['email'])->send(new Invitation($user));
        //     // Mail::to($user['email'])->later($index * 5, new Invitation($user));
        //     Mail::to($user['email'])->send((new Invitation($user))->delay($index * 5));
        // }

        // SendInvitation::dispatch($users);

        return response()->json([
            'status' => true,
            'message' => 'تم ارسال الدعوات بنجاح'
        ], 201);
    }
}
