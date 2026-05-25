@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Nota</h1>

    <br>

    <form action="/grades/{{ $grade->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="student" value="{{ $grade->student }}">

        <br><br>

        <input type="text" name="classroom" value="{{ $grade->classroom }}">

        <br><br>

        <input type="text" name="subject" value="{{ $grade->subject }}">

        <br><br>

        <input type="number" step="0.01" name="grade1" value="{{ $grade->grade1 }}">

        <br><br>

        <input type="number" step="0.01" name="grade2" value="{{ $grade->grade2 }}">

        <br><br>

        <button class="btn">
            Atualizar Nota
        </button>

    </form>

</div>

@endsection