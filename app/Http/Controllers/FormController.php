<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form1()
    {
        return view('forms.form1');
    }

    function form1_data(Request $request)
    {
        // 1. Validation

        // 2. Upload Files

        // 3. Store in Database

        // 4. Redirect to another url

        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name', 'age'));

        // $name = $request->post();
        // $name = $request->get();
        // $name = $request->input();

        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        dd($name, $email, $age);
    }

    function form2()
    {
        $educations = [2 => 'Diploma',  14 => 'Bachelor',  20 => 'Master', 15 => 'pHD'];

        $genders = ['Male', 'Female'];

        $skills = ['Eat', 'Sleep', 'Code'];

        return view('forms.form2', compact('educations', 'genders', 'skills'));
    }

    function form2_data(Request $request)
    {
        dd($request->all());
    }

    function add_course()
    {
        return view('forms.add_course');
    }

    function add_course_data(Request $request)
    {
        // Validation
        // 1. Request Validation
        // 2. File Validation
        // 3. Validator Class
        $request->validate([
            'title' => 'required'
        ]);

        $title = $request->title;
        $image = $request->image;
        $content = $request->content;
        $duration = $request->duration;
        $price = $request->price;
        $sale_price = $request->sale_price;
        $instructor = $request->instructor;

        // $errors = [];

        // if (empty($title)) {
        //     $errors[] = "Title field is required";
        // }

        // if (!empty($title) && strlen($title) < 2 && strlen($title) > 255) {
        //     $errors[] = "title field must be grater than 2 and less than 255";
        // }

        // if (count($errors) > 0) {
        //     dd("There is an errors in your inputs");
        // } else {
        //     dd("Done");
        // }
    }
}
