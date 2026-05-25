@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Professor</h1>

    <br>

    <form action="/teachers/{{ $teacher->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $teacher->name }}">

        <br><br>

        <input type="email" name="email" value="{{ $teacher->email }}">

        <br><br>

        <input type="text" name="phone" value="{{ $teacher->phone }}">

        <br><br>

        <input type="text" name="subject" value="{{ $teacher->subject }}">

        <br><br>

        <button class="btn">
            Atualizar Professor
        </button>

    </form>

</div>

@endsection