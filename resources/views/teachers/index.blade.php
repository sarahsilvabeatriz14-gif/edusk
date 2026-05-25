@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Lista de Professores</h1>

    <br>

    <a href="/teachers/create" class="btn">
        + Cadastrar Professor
    </a>

    <br><br>

    <table class="table">

        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Matéria</th>
            <th>Ações</th>

        </tr>

        @foreach($teachers as $teacher)

        <tr>

            <td>{{ $teacher->id }}</td>

            <td>{{ $teacher->name }}</td>

            <td>{{ $teacher->email }}</td>

            <td>{{ $teacher->phone }}</td>

            <td>{{ $teacher->subject }}</td>

            <td>

                <a href="/teachers/{{ $teacher->id }}/edit" class="edit-btn">
                    Editar
                </a>

                <form action="/teachers/{{ $teacher->id }}" method="POST" style="display:inline;">

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