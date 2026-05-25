<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>EDUSK</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            display:flex;
            background:#f1f5f9;
        }

        .sidebar{
            width:260px;
            height:100vh;
            background:#071a4b;
            padding:30px 20px;
            position:fixed;
        }

        .logo{
            color:white;
            font-size:28px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:10px;
        }

        .menu a{
            color:#cbd5e1;
            text-decoration:none;
            padding:14px;
            border-radius:10px;
            transition:0.3s;
        }

        .menu a:hover{
            background:#0916c1;
            color:white;
        }

        .content{
            margin-left:260px;
            width:100%;
            padding:40px;
        }

        .cards{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .dashboard-card{
            background:white;
            width:220px;
            padding:25px;
            border-radius:16px;
            text-decoration:none;
            color:black;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .dashboard-card h2{
            font-size:18px;
            margin-bottom:15px;
        }

        .dashboard-card p{
            font-size:28px;
            font-weight:bold;
        }

        .card{
            width: 100%
            background:white;
            padding:30px;
            border-radius:16px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
            border-collapse: collapse;
        }

        .btn{
            background: #2563eb;

             color: white;

            padding: 12px 22px;

            border-radius: 12px;

            text-decoration: none;

            font-weight: bold;

            border: none;

            cursor: pointer;
                }

        .table{
            width:100%;
            border-collapse:collapse;
        }

        .table th,
        .table td{
            padding:16px;
            border-bottom:1px solid #e2e8f0;
            text-align:left;
        }

        input{
            width:100%;
            padding:14px;
            border:1px solid #cbd5e1;
            border-radius:10px;
        }

        .edit-btn{
            background: rgb(7, 111, 62);
            color:white;
            padding:10px 18px;
            border-radius:10px;
            text-decoration:none;
            margin-right: 12px;
            font-weight: bold;
            display: inline-block
        }

        .delete-btn{
            background:#dc2626;
            color:white;
            padding:10px 18px;
            border:none;
            border-radius:10px;
            cursor:pointer;
            font-weight: bold;
            cursor: pointer;
        }

    select{
    width:100%;
    padding:14px;
    border:1px solid #cbd5e1;
    border-radius:10px;
}

    </style>

</head>

<body>

    <div class="sidebar">

        <div class="logo">
            EDUSK
        </div>

        <div class="menu">

            <a href="/dashboard">Dashboard</a>

            <a href="/students">Alunos</a>

            <a href="/teachers">Professores</a>

            <a href="/classrooms">Turmas</a>

            <a href="/grades">Notas</a>

            <a href="/frequencies">Frequência</a>

            <a href="#">Conteúdos</a>
            <a href="/enrollments">Matrícula</a>

        </div>

    </div>

    <div class="content">

        @yield('content')

    </div>

</body>

</html>