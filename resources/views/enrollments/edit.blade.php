@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Matrícula</h1>

    <br>

    <form action="/enrollments/{{ $enrollment->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="student" value="{{ $enrollment->student }}">

        <br><br>

        <input type="text" name="classroom" value="{{ $enrollment->classroom }}">

        <br><br>

        <button class="btn">
            Atualizar Matrícula
        </button>

    </form>

</div>

@endsection