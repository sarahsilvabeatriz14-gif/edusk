@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Editar Aluno</h1>

    <br>

    <form action="/students/{{ $student->id }}" method="POST">

        @csrf
        @method('PUT')

        <input
            type="text"
            name="name"
            value="{{ $student->name }}"
            placeholder="Nome"
        >

        <br><br>

        <input
            type="email"
            name="email"
            value="{{ $student->email }}"
            placeholder="Email"
        >

        <br><br>

        <input
            type="text"
            name="phone"
            value="{{ $student->phone }}"
            placeholder="Telefone"
        >

        <br><br>

        <button class="btn">
            Atualizar Aluno
        </button>

    </form>

</div>

@endsection