<?php

namespace App\Http\Controllers\pages;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $courses = Course::query()->orderByDesc('id');
        if($request->has('search')){
            $courses = $courses->where('title' , 'LIKE' , '%' . $request->search . '%');
        }


        $courses = $courses->paginate(6);
        $teachers = Teacher::all();


        return view('pages.home' , compact('courses' , 'teachers'));
    }
}
