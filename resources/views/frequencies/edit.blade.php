@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Frequência</h1>

    <br>

    <form action="/frequencies/{{ $frequency->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="student" value="{{ $frequency->student }}">

        <br><br>

        <input type="text" name="classroom" value="{{ $frequency->classroom }}">

        <br><br>

        <input type="date" name="date" value="{{ $frequency->date }}">

        <br><br>

        <select name="status">

            <option value="Presente">Presente</option>

            <option value="Falta">Falta</option>

        </select>

        <br><br>

        <button class="btn">
            Atualizar Frequência
        </button>

    </form>

</div>

@endsection