@extends('layouts.app')

@section('content')

<h1 style="margin-bottom:20px;">
    Dashboard EDUSK
</h1>

<div class="cards">

    <div class="dashboard-card">

        <h2>Total de Alunos</h2>

        <p>{{ \App\Models\Student::count() }}</p>

    </div>

    <div class="dashboard-card">

        <h2>Professores</h2>

        <p>0</p>

    </div>

    <div class="dashboard-card">

        <h2>Turmas</h2>

        <p>0</p>

    </div>

</div>

@endsection