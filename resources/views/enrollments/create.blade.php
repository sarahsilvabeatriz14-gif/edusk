@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Matricular Aluno</h1>

    <br>

    <form action="/enrollments" method="POST">

        @csrf

        <select name="student">

            <option>Selecione o aluno</option>

            @foreach($students as $student)

                <option value="{{ $student->name }}">

                    {{ $student->name }}

                </option>

            @endforeach

        </select>

        <br><br>

        <select name="classroom">

            <option>Selecione a turma</option>

            @foreach($classrooms as $classroom)

                <option value="{{ $classroom->name }}">

                    {{ $classroom->name }}

                </option>

            @endforeach

        </select>

        <br><br>

        <button class="btn">
            Matricular
        </button>

    </form>

</div>

@endsection