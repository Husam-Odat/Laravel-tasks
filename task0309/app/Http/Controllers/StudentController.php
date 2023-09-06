<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()

    public function getAllStudents()
    {
        $students = Student::with('courses')->get();
        // $students = Post::all();
        // $students = DB::select('select * 
        // from students 
        // join stu_cours on  students.id = stu_cours.stu_id 
        // join courses on  courses.id = stu_cours.cou_id' 

        // );
        // dd($students);
        return view('student', ['students' => $students]);
    }


    public function getAllStudents1()
    {
        // $students = Student::with('courses')->get();
        // $students = Post::all();
        $students = DB::select(
            'select * 
            from students 
            join stu_cours on  students.id = stu_cours.stu_id 
            join courses on  courses.id = stu_cours.cou_id'

        );

        return view('student1', ['students' => $students]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
