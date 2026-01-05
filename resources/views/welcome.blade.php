<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Plateforme de gestion d'emploi du temps</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f8f8f8;
        }

        .hero{
            min-height:100vh;
            display:flex;
            align-items:center;
        }

        .btn-main{
            background:#3b4cc2;
            color:white;
        }

        .btn-main:hover{
            background:#3b4cc2;
            color:white;
        }
    </style>
</head>

<body>

<nav class="navbar ">
    <div class="container">
        <img src="/logo.png" width="80">

        <a href="{{ route('login') }}" class="btn btn-primary">
            Se connecter
        </a>
    </div>
</nav>


<section class="hero mt-0" >
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">

                <h2 class="fw-bold text-primary">
                    Platform de gestion de l’emploi du temps
                </h2>

                <p class="mt-3">
                    Transformez la gestion de vos emplois du temps en une gestion automatisée et efficace
                </p>

                <a href="/" class="btn btn-main mt-3">
                    consultez votre emploi du temps
                </a>

            </div>

            <div class="col-md-6">
                <img src="/planning.jpg" class="img-fluid">
            </div>

        </div>
    </div>
</section>

</body>
</html>
