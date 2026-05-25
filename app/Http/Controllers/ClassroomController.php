<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{

    public function index()
    {

        $classrooms = Classroom::all();

        return view('classrooms.index', compact('classrooms'));

    }

    public function create()
    {

        return view('classrooms.create');

    }

    public function store(Request $request)
    {

        Classroom::create([

            'name' => $request->name,
            'teacher' => $request->teacher,
            'room' => $request->room,
            'schedule' => $request->schedule

        ]);

        return redirect('/classrooms');

    }

    public function edit(int $id)
    {

        $classroom = Classroom::find($id);

        return view('classrooms.edit', compact('classroom'));

    }

    public function update(Request $request, int $id)
    {

        $classroom = Classroom::find($id);

        $classroom->update([

            'name' => $request->name,
            'teacher' => $request->teacher,
            'room' => $request->room,
            'schedule' => $request->schedule

        ]);

        return redirect('/classrooms');

    }

    public function destroy(int $id)
    {

        $classroom = Classroom::find($id);

        $classroom->delete();

        return redirect('/classrooms');

    }

}