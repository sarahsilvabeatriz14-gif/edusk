<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {

        Student::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone

        ]);

        return redirect('/students')
        ->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function destroy(int $id)
    {

        $student = Student::find($id);

        $student->delete();

        return redirect('/students')
       ->with('success', 'Aluno removido com sucesso!');
    }

    public function edit(int $id)
    {

        $student = Student::find($id);

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {

        $student = Student::find($id);

        $student->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone

        ]);

        return redirect('/students')
        ->with('success', 'Aluno atualizado com sucesso!');

    }

}