@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Registrar Frequência</h1>

    <br>

    <form action="/frequencies" method="POST">

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

        <input type="date" name="date">

        <br><br>

        <select name="status">

            <option value="Presente">Presente</option>

            <option value="Falta">Falta</option>

        </select>

        <br><br>

        <button class="btn">
            Salvar Frequência
        </button>

    </form>

</div>

@endsection