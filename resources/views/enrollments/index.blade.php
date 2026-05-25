@extends('layouts.app')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <h1>Matrículas</h1>

        <a href="/enrollments/create" class="btn">
            + Nova Matrícula
        </a>

    </div>

    <table class="table">

        <tr>

            <th>ID</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Ações</th>

        </tr>

        @foreach($enrollments as $enrollment)

        <tr>

            <td>{{ $enrollment->id }}</td>

            <td>{{ $enrollment->student }}</td>

            <td>{{ $enrollment->classroom }}</td>

            <td>

                <a href="/enrollments/{{ $enrollment->id }}/edit" class="edit-btn">
                    Editar
                </a>

                <form action="/enrollments/{{ $enrollment->id }}" method="POST" style="display:inline;">

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