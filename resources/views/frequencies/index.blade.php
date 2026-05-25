@extends('layouts.app')

@section('content')

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">

        <h1>Frequência</h1>

        <a href="/frequencies/create" class="btn">
            + Nova Frequência
        </a>

    </div>

    <table class="table">

        <tr>

            <th>ID</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>

        </tr>

        @foreach($frequencies as $frequency)

        <tr>

            <td>{{ $frequency->id }}</td>

            <td>{{ $frequency->student }}</td>

            <td>{{ $frequency->classroom }}</td>

            <td>{{ $frequency->date }}</td>

            <td>{{ $frequency->status }}</td>

            <td>

                <a href="/frequencies/{{ $frequency->id }}/edit" class="edit-btn">
                    Editar
                </a>

                <form action="/frequencies/{{ $frequency->id }}" method="POST" style="display:inline;">

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