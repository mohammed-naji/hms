<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // plain sql
        // $courses = DB::select('select * from courses');

        // query builder
        // $courses = DB::table('courses')->get();

        // eloquent
        // $courses = Course::all();

        // $courses = Course::orderBy('id', 'desc')->get();
        $courses = Course::latest()->get();

        // select * from courses order by id desc

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {

        $path = $request->file('image')->store('uploads', 'custom');

        // PHP new object
        // $course = new Course();
        // $course->title = $request->title;
        // $course->image = $path;
        // $course->instructor = $request->instructor;
        // $course->price = $request->price;
        // $course->sale_price = $request->sale_price;
        // $course->hours = $request->hours;
        // $course->content = $request->content;
        // $course->save();

        // PHP Model Class
        Course::create([
            'title' => $request->title,
            'image' => $path,
            'instructor' => $request->instructor,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'hours' => $request->hours,
            'content' => $request->content,
        ]);

        // with
        // with
        // with

        flash()->success('Course created successfully!');

        return redirect()
            ->route('courses.index');
        // ->with('msg', 'Courses added successfully')
        // ->with('class', 'bg-teal-400');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $next = Course::where('id', '>', $course->id)->first();
        $prev = Course::where('id', '<', $course->id)->latest()->first();

        return view('courses.show', compact('course', 'next', 'prev'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        if ($request->hasFile('image')) {
            File::delete(public_path($course->image));
            $path = $request->file('image')->store('uploads', 'custom');
        }

        $course->update([
            'title' => $request->title,
            'image' => $path ?? $course->image,
            'instructor' => $request->instructor,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'hours' => $request->hours,
            'content' => $request->content,
        ]);

        flash()->success('Course updated successfully!');

        return redirect()
            ->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        // $course = Course::findOrFail($id);
        // $course = Course::where('id', $id)->first();

        // dd($course->title);

        // php pure
        // unlink(public_path('uploads/ss.png'));

        File::delete(public_path($course->image));

        $course->delete();

        flash()->success('Course deleted successfully!');

        return redirect()
            ->route('courses.index');
    }
}
