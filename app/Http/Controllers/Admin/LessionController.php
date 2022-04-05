<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessions = Lession::latest()->paginate(10);
        return view('admin.lession.index',compact('lessions'))->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.lession.insert',compact('courses'));

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
            'course_id' => 'required',
            'description' => 'required',
        ]);

        $lession = new Lession();
        $lession->title = $request->get('title');
        $lession->description = $request->get('description');
        $lession->course_id = $request->get('course_id');
        $lession->video_url = $request->get('video_url');
        $lession->save();

        session()->flash('massage','Lession inserted successfully');
        return redirect('/lession');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lession  $lession
     * @return \Illuminate\Http\Response
     */
    public function show(Lession $lession,$id)
    {
        $lessions = Lession::find($id);
        return view('admin.lession.show',compact('lessions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lession  $lession
     * @return \Illuminate\Http\Response
     */
    public function edit(Lession $lession,$id)
    {
        $lessions = Lession::find($id);
        $courses = Course::all();
        return view('admin.lession.edit',compact(['courses', 'lessions']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lession  $lession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lession $lession,$id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'course_id' => 'required',
            'description' => 'required',
        ]);
        
        $lession = Lession::find($id);
        $lession->title = $request->get('title');
        $lession->description = $request->get('description');
        $lession->Course_id = $request->get('course_id');
        $lession->save();

        session()->flash('massage','Lession Updated successfully');
        return redirect('/lession');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lession  $lession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lession $lession,$id)
    {
        Lession::destroy($id);
        session()->flash('massage','Lession destroy successfully');
        return redirect('/lession');
    }
}
