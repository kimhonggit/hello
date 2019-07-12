<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Student::all();
        return view('index')->with('posts',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->input('txtFname'));
        /*$student = new Student();
        $student->fname = 'Vichhai';
        $student->lname = 'Chhe';
        $student->gender = 'm';
        $student->address = 'kpt';
        $student->save();*/
        $student = new Student();
        
        $student->fname = $request->input('txtFname');
        $student->lname = $request->input('txtLname');
        $student->gender = $request->input('gender');
        $student->address = $request->input('txtAddress');
        $student->save();
        return redirect( route('student'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('create');
        $post = Student::find($id);
        return view('show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Student::find($id);
        return view('update')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *\
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        //dd($request->txtFname);
        $student->fname = $request->input('txtFname');
        $student->lname = $request->input('txtLname');
        $student->gender = $request->input('gender');
        $student->address = $request->input('txtAddress');
        $student->save();
        return redirect( route('student'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect( route('student'));
    }

}

