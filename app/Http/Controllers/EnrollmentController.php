<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\models\Classroom;
use App\Models\Student;

class EnrollmentController extends Controller
{

    public function index()
    {

        $enrollments = Enrollment::all();

        return view('enrollments.index', compact('enrollments'));

    }

    public function create()
    {
     

        $students = Student::all();

        $classrooms = Classroom::all();

        return view('enrollments.create', compact('students', 'classrooms'));

    }

    public function store(Request $request)
    {

        Enrollment::create([

            'student' => $request->student,
            'classroom' => $request->classroom

        ]);

        return redirect('/enrollments');

    }

    public function edit(int $id)
    {

        $enrollment = Enrollment::find($id);

        return view('enrollments.edit', compact('enrollment'));

    }

    public function update(Request $request, int $id)
    {

        $enrollment = Enrollment::find($id);

        $enrollment->update([

            'student' => $request->student,
            'classroom' => $request->classroom

        ]);

        return redirect('/enrollments');

    }

    public function destroy(int $id)
    {

        $enrollment = Enrollment::find($id);

        $enrollment->delete();

        return redirect('/enrollments');

    }

    public function show($id)
    {
        //
    }

}