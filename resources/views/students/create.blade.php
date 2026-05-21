<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>

    <style>

        body{
            font-family:Arial;
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            background:white;
            padding:30px;
            border-radius:10px;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
            margin-bottom:20px;
        }

        button{
            background:#4f46e5;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:5px;
            cursor:pointer;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Cadastrar Aluno</h1>

    <form method="POST" action="/students">
        @csrf

       <input type="text" name="name" placeholder="Nome do aluno">

       <input type="email" name="email" placeholder="Email">

       <input type="text" name="phone" placeholder="Telefone">

        <button type="submit">
            Salvar Aluno
        </button>

    </form>

</div>

</body>
</html>