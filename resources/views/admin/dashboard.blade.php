<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard Admin</title>

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

.navbar{
  background:white;
  border-bottom:1px solid #e5e7eb;
}

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

.sidebar a:hover{
  background:#e0e7ff;
  color:var(--primary-blue);
}

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

.card h6{
  color:var(--primary-blue);
}
</style>
</head>

<body>

<nav class="navbar px-3">
  <span class="fw-bold text-primary">OFPPT – Administration</span>
  <span id="date"></span>
</nav>

<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <aside class="col-md-3 col-lg-2 sidebar p-3 border-end">
      <h6 class="text-muted mb-3">MENU</h6>
      <a class="active" data-link>🏠 Dashboard</a>
      <a data-link>👨‍🏫 Formateurs</a>
      <a data-link>👥 Groupes</a>
      <a data-link>🏫 Salles</a>
      <a data-link>📅 Emplois du temps</a>
    </aside>

    <!-- CONTENT -->
    <main class="col-md-9 col-lg-10 p-4">
      <h4 class="mb-4">Espace Administrateur</h4>

      <div class="row">
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body text-center">
              <h6>Formateurs</h6>
              <p class="fs-3" id="formateurs">0</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body text-center">
              <h6>Groupes</h6>
              <p class="fs-3" id="groupes">0</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body text-center">
              <h6>Salles</h6>
              <p class="fs-3" id="salles">0</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body text-center">
              <h6>Séances</h6>
              <p class="fs-3" id="seances">0</p>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<script>
date.innerText = new Date().toLocaleDateString("fr-FR");
formateurs.innerText = 15;
groupes.innerText = 10;
salles.innerText = 6;
seances.innerText = 120;

/* SURVOL MENU */
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
