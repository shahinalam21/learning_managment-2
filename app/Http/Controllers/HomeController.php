<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Categori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function UserHome()
    {
        $courses = Course::all();
        $categoris = Categori::all();
        return view('frontend.index',compact(['courses','categoris']));
    }

    public function show(Course $id)
    {
        $courses = Course::find($id);
        return view('frontend.coursedetilse',compact('courses'));
    }
  
}
