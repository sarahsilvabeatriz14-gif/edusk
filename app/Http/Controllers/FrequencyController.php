<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frequency;
use App\Models\Student;
use App\Models\Classroom;

class FrequencyController extends Controller
{

    public function index()
    {

        $frequencies = Frequency::all();

        return view('frequencies.index', compact('frequencies'));

    }

    public function create()
    {

        $students = Student::all();

        $classrooms = Classroom::all();

        return view('frequencies.create', compact('students', 'classrooms'));

    }

    public function store(Request $request)
    {

        Frequency::create([

            'student' => $request->student,
            'classroom' => $request->classroom,
            'date' => $request->date,
            'status' => $request->status

        ]);

        return redirect('/frequencies');

    }

    public function edit(int $id)
    {

        $frequency = Frequency::find($id);

        return view('frequencies.edit', compact('frequency'));

    }

    public function update(Request $request, int $id)
    {

        $frequency = Frequency::find($id);

        $frequency->update([

            'student' => $request->student,
            'classroom' => $request->classroom,
            'date' => $request->date,
            'status' => $request->status

        ]);

        return redirect('/frequencies');

    }

    public function destroy(int $id)
    {

        $frequency = Frequency::find($id);

        $frequency->delete();

        return redirect('/frequencies');

    }

    public function show($id)
    {
        //
    }

}