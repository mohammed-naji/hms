<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    function index()
    {
        return view('blog.index');
    }

    function about()
    {
        return view('blog.about');
    }

    function post()
    {
        return view('blog.post');
    }

    function contact()
    {
        return view('blog.contact');
    }

    function contact_data(Request $request)
    {
        // 1. validation
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'cv' => 'nullable|file|mimes:pdf,docx'
        ]);

        // Mail::send('mails.test', [], function ($message) use ($request) {
        //     $message->from($request->email);
        //     $message->subject("A test email");
        //     $message->to("admin@gmail.com");
        // });

        // Mail::to('admin@gmail.com')->send(new TestMail());
        // Mail::to('admin@gmail.com')->send(new TestMail());

        // 2. upload file
        if ($request->hasFile('cv')) {
            $validated['cv'] = $request->file('cv')->store('uploads', 'custom');
        }

        // dd($validated);


        Mail::to('malqumbuz@gmail.com')->send(new ContactUs($validated));
    }
}
