@extends('layouts.app')

@section('content')

<h1 style="margin-bottom:20px;">
    Dashboard EDUSK
</h1>

<div class="cards">

    <a href="/students" class="dashboard-card">

        <h2>Total de Alunos</h2>

        <p>{{ \App\Models\Student::count() }}</p>

    </a>

    <a href="/teachers" class="dashboard-card">

        <h2>Professores</h2>

        <p>{{ \App\Models\Teacher::count() }}</p>

    </a>

    <div class="dashboard-card">

        <h2>Turmas</h2>

        <p>{{$classrooms}}</p>

    </div>

</div>

@endsection