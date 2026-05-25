@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Cadastrar Turma</h1>

    <br>

    <form action="/classrooms" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Nome da Turma">

        <br><br>

        <input type="text" name="teacher" placeholder="Professor">

        <br><br>

        <input type="text" name="room" placeholder="Sala">

        <br><br>

        <input type="text" name="schedule" placeholder="Horário">

        <br><br>

        <button class="btn">
            Cadastrar Turma
        </button>

    </form>

</div>

@endsection