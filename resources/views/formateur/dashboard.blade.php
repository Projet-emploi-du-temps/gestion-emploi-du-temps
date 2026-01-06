<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Formateur</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root{
  --primary-blue:#2563eb;
  --light-bg:#f8fafc;
  --text-dark:#1f2937;
}

body{
  background:var(--light-bg);
  color:var(--text-dark);
}

/* NAVBAR */
.navbar{
  background:white;
  border-bottom:1px solid #e5e7eb;
}

/* SIDEBAR */
.sidebar{
  background:white;
  min-height:100vh;
}

.sidebar a{
  color:var(--text-dark);
  text-decoration:none;
  padding:10px 12px;
  display:block;
  border-radius:6px;
  transition:.2s;
}

/* SURVOL MENU */
.sidebar a:hover{
  background:#e0e7ff;
  color:var(--primary-blue);
}

/* MENU ACTIF */
.sidebar a.active{
  background:var(--primary-blue);
  color:white;
}

/* CARDS */
.card{
  transition:all .2s ease-in-out;
  cursor:pointer;
}

.card:hover{
  transform:translateY(-5px);
  box-shadow:0 8px 20px rgba(0,0,0,.1);
  border:1px solid var(--primary-blue);
}

.card h5{
  color:var(--primary-blue);
}
</style>
</head>

<body>

<nav class="navbar px-3">
  <span class="fw-bold text-primary">OFPPT – Formateur</span>
  <span id="date"></span>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <aside class="col-md-3 col-lg-2 sidebar p-3 border-end">
      <h6 class="text-muted mb-3">MENU</h6>
      <a class="active" data-link>🏠 Tableau de bord</a>
      <a data-link>📅 Mon Emploi du temps</a>
      <a data-link>👥 Mes Groupes</a>
      <a data-link>📘 Mes Séances</a>
    </aside>

    <!-- CONTENT -->
    <main class="col-md-9 col-lg-10 p-4">
      <h4 class="mb-4">Bienvenue Formateur</h4>

      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5>Groupes</h5>
              <p class="fs-3" id="groupes">0</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5>Séances / semaine</h5>
              <p class="fs-3" id="seances">0</p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5>Heures totales</h5>
              <p class="fs-3" id="heures">0h</p>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<script>
date.innerText = new Date().toLocaleDateString("fr-FR");
groupes.innerText = 4;
seances.innerText = 10;
heures.innerText = "28h";

/* SURVOL MENU + ACTIVATION */
const links = document.querySelectorAll("[data-link]");
let activeLink = document.querySelector(".sidebar a.active");

links.forEach(link=>{
  link.addEventListener("mouseenter",()=>{
    links.forEach(l=>l.classList.remove("active"));
    link.classList.add("active");
  });
  link.addEventListener("mouseleave",()=>{
    links.forEach(l=>l.classList.remove("active"));
    activeLink.classList.add("active");
  });
  link.addEventListener("click",()=>{
    activeLink = link;
  });
});
</script>

</body>
</html>
