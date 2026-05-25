@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Turma</h1>

    <br>

    <form action="/classrooms/{{ $classroom->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $classroom->name }}">

        <br><br>

        <input type="text" name="teacher" value="{{ $classroom->teacher }}">

        <br><br>

        <input type="text" name="room" value="{{ $classroom->room }}">

        <br><br>

        <input type="text" name="schedule" value="{{ $classroom->schedule }}">

        <br><br>

        <button class="btn">
            Atualizar Turma
        </button>

    </form>

</div>

@endsection