<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function course()
    {
        $courses = Course::all();
        return view('frontend.course',compact('courses'));
      
    }
}
