@extends('layouts.app')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <h1>Notas dos Alunos</h1>

        <a href="/grades/create" class="btn">
            + Nova Nota
        </a>

    </div>

    <table class="table">

        <tr>

            <th>ID</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Disciplina</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>
            <th>Ações</th>

        </tr>

        @foreach($grades as $grade)

        <tr>

            <td>{{ $grade->id }}</td>

            <td>{{ $grade->student }}</td>

            <td>{{ $grade->classroom }}</td>

            <td>{{ $grade->subject }}</td>

            <td>{{ $grade->grade1 }}</td>

            <td>{{ $grade->grade2 }}</td>

            <td>{{ $grade->average }}</td>

            <td>

                <a href="/grades/{{ $grade->id }}/edit" class="edit-btn">
                    Editar
                </a>

                <form action="/grades/{{ $grade->id }}" method="POST" style="display:inline;">

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