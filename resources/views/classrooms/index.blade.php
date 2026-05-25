@extends('layouts.app')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <h1>Lista de Turmas</h1>

        <a href="/classrooms/create" class="btn">
            + Nova Turma
        </a>

    </div>

    <table class="table">

        <tr>

            <th>ID</th>
            <th>Turma</th>
            <th>Professor</th>
            <th>Sala</th>
            <th>Horário</th>
            <th>Ações</th>

        </tr>

        @foreach($classrooms as $classroom)

        <tr>

            <td>{{ $classroom->id }}</td>

            <td>{{ $classroom->name }}</td>

            <td>{{ $classroom->teacher }}</td>

            <td>{{ $classroom->room }}</td>

            <td>{{ $classroom->schedule }}</td>

            <td>

                <a href="/classrooms/{{ $classroom->id }}/edit" class="edit-btn">
                    Editar
                </a>

                <form action="/classrooms/{{ $classroom->id }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button class="delete-btn">
                        Excluir
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection