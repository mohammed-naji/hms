<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCourseRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    function add_course_data(AddCourseRequest $request)
    {
        // Validation
        // 1. Request Validation
        // 2. File Validation
        // 3. Validator Class

        // $request->validate([
        //     // 'title' => 'required|min:2|max:20',
        //     'title' => ['required', 'min:2', 'max:20'],
        //     'image' => 'required|image|mimes:png,jpg,jpeg,svg',
        //     'content' => 'nullable|min:50',
        //     'duration' => 'required|numeric',
        //     'price' => 'required|numeric'
        // ], [
        //     'title.required' => 'هذا الحقل مطلوب',
        //     'image.required' => 'بدنا صورتك ي حبيبي'
        // ]);

        dd($request->validated());

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

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Request $request)
    {
        // dd($request->file('images'));

        // $name = $request->file('image')->getClientOriginalName();
        // $name = rand() . '_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        // 564897987_49746546545_46546545445
        // $request->file('image')->move(public_path('/uploads'), $name);

        // $request->validate([
        //     'image' => 'required|image|mimes:png'
        // ]);

        // $path = $request->file('image')->store('uploads', 'custom');

        $images = [];

        foreach ($request->file('images') as $img) {
            $images[] = $img->store('uploads', 'custom');
        }

        // dd($images);

        return view('forms.form3_image', compact('images'));
    }

    function dropzone()
    {
        return view('forms.dropzone');
    }

    function dropzone_data(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,gif|max:5000' // Max 5MB
        ]);

        $image = $request->file('file');
        $imageName = time() . '_' . $image->getClientOriginalName();
        // Store the file in the public disk under 'uploads' folder
        $image->storeAs('uploads', $imageName, 'custom');

        // You can also save file information to the database here

        // File::delete()

        return response()->json(['success' => $imageName]);
    }
}
