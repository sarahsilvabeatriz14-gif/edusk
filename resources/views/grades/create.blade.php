@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Cadastrar Nota</h1>

    <br>

    <form action="/grades" method="POST">

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

        <input type="text" name="subject" placeholder="Disciplina">

        <br><br>

        <input type="number" step="0.01" name="grade1" placeholder="Nota 1">

        <br><br>

        <input type="number" step="0.01" name="grade2" placeholder="Nota 2">

        <br><br>

        <button class="btn">
            Salvar Nota
        </button>

    </form>

</div>

@endsection