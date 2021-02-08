<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        return view('courses.courses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('courses.createCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => "required",
            'description' => "required",
            'video' => "required",
            'image'=> "not required",
            'docs'=>"not required"
        ]);

        Course::create([
            
            'title' =>$request->title,
            'video' =>$request->video,
            'description' =>$request->description,
            'image' =>$request->image,
            'docs' =>$request->docs
        ]);

        return redirect(route('storeCourse'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, $id)
    {
        $course = Course::find($id);
        return view('courses.courses', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, $id)
    {
        $course = Course::find($id);
        return view('courses.formCourse', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, $id)
    {
        $course = Course::find($id);
        $request->validate([
            'title' => "required",
            'description' => "required",
            'video' => "required",
            'image'=> "not required",
            'docs'=>"not required"
        ]);

        $course->update([
            
            'title' =>$request->title,
            'description' =>$request->description,
            'video' =>$request->video,
            'image' =>$request->image,
            'docs' =>$request->docs
        ]);

        return redirect(route('updateCourse'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect(route('/courses'));
    }
}
