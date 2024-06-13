<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(Request $request)
    {
        $courses = Course::query()->orderByDesc('id');
        if($request->has('search')){
            $courses = $courses->where('title' , 'LIKE' , '%' . $request->search . '%');
        }


        $courses = $courses->paginate(4);
        return view('course.courses' , compact('courses'));
    }


    public function show($slug)
    {
        $course = Course::query()->where('title' , str_replace('_' , ' ' , $slug))->firstOrFail();
        return view('course.course' , compact('course'));
    }

}
