@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Cadastrar Professor</h1>

    <br>

    <form action="/teachers" method="POST">

        @csrf

        <input type="text" name="name" placeholder="Nome">

        <br><br>

        <input type="email" name="email" placeholder="Email">

        <br><br>

        <input type="text" name="phone" placeholder="Telefone">

        <br><br>

        <input type="text" name="subject" placeholder="Matéria">

        <br><br>

        <button class="btn">
            Cadastrar Professor
        </button>

    </form>

</div>

@endsection