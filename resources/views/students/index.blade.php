@extends('layouts.app')

@section('content')

<div class="card">

    <h1>Lista de Alunos</h1>

    <br>

    <a href="/students/create" class="btn">
        + Cadastrar Aluno
    </a>

    <br><br>

    <table class="table">

    <tr>

        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>

    </tr>

    @foreach($students as $student)

    <tr>

        <td>{{ $student->id }}</td>

        <td>{{ $student->name }}</td>

        <td>{{ $student->email }}</td>

        <td>{{ $student->phone }}</td>

        <td>

            <a href="/students/{{$student->id}}/edit" class="edit-btn">
                Editar
            </a>

           <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">

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