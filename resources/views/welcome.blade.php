<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Plateforme de gestion d'emploi du temps</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar{
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .hero{
            min-height:90vh;
            display:flex;
            align-items:center;
        }

        .badge-custom{
            background:#e9ecff;
            color:#3d4fc9;
            padding:8px 14px;
            border-radius:20px;
            font-size:14px;
        }

        .title{
            color:#3d4fc9;
            font-weight:800;
        }

        .btn-main{
            background:#3d4fc9;
            color:white;
            padding:10px 20px;
            border-radius:10px;
        }

        .btn-main:hover{
            background:#2e3ead;
            color:white;
        }

        footer{
            background:#fff;
            padding:20px;
            text-align:center;
            color:#777;
            border-top:1px solid #eee;
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <img src="/logo.png" width="70">
        </div>

        <a href="/login" class="btn btn-main">
            Se connecter
        </a>
    </div>
</nav>


<section class="hero">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <span class="badge-custom">Bienvenue sur notre plateforme</span>

                <h1 class="mt-3 title">
                    Gérez vos emplois du temps
                    <br>
                    facilement & rapidement
                </h1>

                <p class="mt-3">
                    Une solution intuitive pour les formateurs, étudiants et administrateurs.
                    Consultez et organisez vos plannings en quelques clics.
                </p>

                <a href="/login" class="btn btn-main mt-2">
                    Consulter mon emploi du temps
                </a>

            </div>


            <div class="col-md-6 text-center">
                <img src="/planning.jpg" class="img-fluid rounded-4 shadow">
            </div>

        </div>

    </div>
</section>


<footer>
    © 2026 - Plateforme de gestion d'emploi du temps
</footer>

</body>
</html>
