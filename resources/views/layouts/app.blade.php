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
        }

        body{
            font-family:Arial;
            background:#f4f6f9;
            display:flex;
        }

        .sidebar{
            width:250px;
            height:100vh;
            background:#4338ca;
            color:white;
            padding:20px;
            position:fixed;
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            margin-bottom:40px;
        }

        .menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px;
            border-radius:8px;
            margin-bottom:10px;
        }

        .menu a:hover{
            background:rgba(255,255,255,0.1);
        }

        .content{
            margin-left:250px;
            padding:40px;
            width:100%;
        }

        .topbar{
            background:white;
            padding:20px;
            border-radius:10px;
            margin-bottom:30px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:10px;
        }

        .btn{
            background: #4338ca
            color:#f4f6f9
            padding:12px 20px;
            text-decoration:none;
            border-radius:8px;
            display:inline-block;
        }

        .cards{
    display:flex;
    gap:20px;
}

.dashboard-card{
    background:white;
    padding:30px;
    border-radius:10px;
    width:250px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.dashboard-card h2{
    margin-bottom:15px;
    color:#4338ca;
}

.dashboard-card p{
    font-size:40px;
    font-weight:bold;
}

.edit-btn{
    background:#2563eb;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:6px;
    margin-right:5px;
}

.delete-btn{
    background:#dc2626;
    color:white;
    padding:8px 12px;
    text-decoration:none;
    border-radius:6px;

}

.success-message{
    background: #16a34a;
    color:white;
    border-radius: 8px;
    margin-bottom: 20px;
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

        <a href="#">Professores</a>

        <a href="#">Notas</a>

        <a href="#">Frequência</a>

        <a href="#">Conteúdos</a>

    </div>

</div>

<div class="content">

    <div class="topbar">

        Bem-vindo ao sistema EDUSK

    <div class="container">

      @if(session('success'))
      <div class="success-messagem">

       {{ session('success')}}

       </div>
   @endif

    @yield('content')

</div>

</body>
</html>
