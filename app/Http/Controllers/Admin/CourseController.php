<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Categori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('admin.course.index',compact('courses'))->with('i',(request()->input('page',1)-1)*10);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoris = Categori::all();
        return view('admin.course.insert',compact('categoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'categori_id' => 'required',
            'description' => 'required',
        ]);

        $image = $request->file('image');
        $imagename = time().'.'.$image->extension();
        $image->move(public_path('images'),$imagename);

        $course = new Course();
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->Categori_id = $request->get('categori_id');
        $course->image =$imagename;
        $course->save();

        session()->flash('massage','courses inserted successfully');
        return redirect('/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course,$id)
    {
        $courses = Course::find($id);
        return view('admin.course.show',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, $id)
    {
        $courses = Course::find($id);
        $categoris = Categori::all();
        return view('admin.course.edit',compact(['categoris', 'courses']));
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
        $validated = $request->validate([
            'title' => 'required',
            'categori_id' => 'required',
            'description' => 'required',
        ]);
        
        $course = Course::find($id);
        $course->title = $request->get('title');
        $course->description = $request->get('description');
        $course->Categori_id = $request->get('categori_id');
        $course->save();

        session()->flash('massage','courses Updated successfully');
        return redirect('/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course,$id)
    {
        Course::destroy($id);
        session()->flash('massage','courses destroy successfully');
        return redirect('/course');
    }
}
