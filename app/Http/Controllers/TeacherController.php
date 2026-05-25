<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index()
    {

        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));

    }

    public function create()
    {

        return view('teachers.create');

    }

    public function store(Request $request)
    {

        Teacher::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject

        ]);

        return redirect('/teachers')
        ->with('success', 'Professor cadastrado com sucesso!');

    }

    public function edit(int $id)
    {

        $teacher = Teacher::find($id);

        return view('teachers.edit', compact('teacher'));

    }

    public function update(Request $request, int $id)
    {

        $teacher = Teacher::find($id);

        $teacher->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject

        ]);

        return redirect('/teachers')
        ->with('success', 'Professor atualizado com sucesso!');

    }

    public function destroy(int $id)
    {

        $teacher = Teacher::find($id);

        $teacher->delete();

        return redirect('/teachers')
        ->with('success', 'Professor removido com sucesso!');

    }

    public function show ($id)
    {
        
    }

}