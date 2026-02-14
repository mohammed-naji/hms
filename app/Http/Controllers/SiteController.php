<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index()
    {
        $name = "Alaa";
        $collage = "Engineering";

        // return view('index')
        //     ->with('name', $name)
        //     ->with('collage', $collage);

        // dd(compact('name', 'collage'));

        // return view('index', [
        //     'my_name' => $name,
        //     'my_collage' => $collage
        // ]);

        return view('index', compact('name', 'collage'));
    }

    function teachers()
    {
        return view('teachers');
    }

    function courses()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Laravel',
                'hours' => 120,
                'price' => 200,
                'instructor' => 'Mohammed Naji'
            ],
            [
                'id' => 2,
                'name' => 'Solar',
                'hours' => 120,
                'price' => 300,
                'instructor' => 'Ali Ahmed'
            ],
            [
                'id' => 3,
                'name' => 'Graphic Design',
                'hours' => 100,
                'price' => 150,
                'instructor' => 'Swasan Dadr'
            ],
            [
                'id' => 15,
                'name' => 'Ux/Ui',
                'hours' => 100,
                'price' => 200,
                'instructor' => 'Kamel Alaa'
            ]
        ];
        // $courses = Course::all()
        // SELECT * FROM courses
        // id, name, hours, price, instructor
        // ddd($courses);
        // dump($courses);
        return view('courses', compact('courses'));
    }

    function courses_single()
    {
        return view('courses_single');
    }

    function contact()
    {
        return view('contact');
    }
}
