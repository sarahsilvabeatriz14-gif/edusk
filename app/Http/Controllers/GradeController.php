<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Classroom;

class GradeController extends Controller
{

    public function index()
    {

        $grades = Grade::all();

        return view('grades.index', compact('grades'));

    }

    public function create()
    {
           $students = Student::all();
           $classrooms = Classroom::all();
        return view('grades.create' , compact('students', 'classrooms'));

    }

    public function store(Request $request)
    {

        $average = ($request->grade1 + $request->grade2) / 2;

        Grade::create([

            'student' => $request->student,
            'classroom' => $request->classroom,
            'subject' => $request->subject,
            'grade1' => $request->grade1,
            'grade2' => $request->grade2,
            'average' => $average

        ]);

        return redirect('/grades');

    }

    public function edit(int $id)
    {

        $grade = Grade::find($id);

        return view('grades.edit', compact('grade'));

    }

    public function update(Request $request, int $id)
    {

        $grade = Grade::find($id);

        $average = ($request->grade1 + $request->grade2) / 2;

        $grade->update([

            'student' => $request->student,
            'classroom' => $request->classroom,
            'subject' => $request->subject,
            'grade1' => $request->grade1,
            'grade2' => $request->grade2,
            'average' => $average

        ]);

        return redirect('/grades');

    }

    public function destroy(int $id)
    {

        $grade = Grade::find($id);

        $grade->delete();

        return redirect('/grades');

    }

    public function show($id)
    {
        //
    }

}