<!DOCTYPE html>



  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Exercice: migrer de php a Js</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>
                     <!-- Page Heading -->
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container" id="wd">
        <a class="navbar-brand" href="#">l'Api PK-PA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>

    <!-- Page Content -->

<?php
echo "  <div class='container'>
      <h1 class='my-4'>Exercices:
      <small>refaire le restologue php</small>
<p><h4>but de l'exercice: Avoir une reflexion sur ce que devrait étre l'application<br>
sur ce que devrait etre les functions et fonctionnalitées.</h4><br>
redécoupé les différentes features de l'Api
</p>
<h3>la page UI qui ce découpent en 4 partie principal</h3>
<dl>
<dt>Accueil:</dt> <dd>comporte index=>connexion=>inscriptions ==><strong>renvoie sur accueil.</strong></dd>
<dt>Restau/resa:</dt> <dd>les cartes et les menus, un systeme de resa.</dd>
<dt>livre d'or:</dt> <dd>renvoie sur le livre d'or du resto.</dd>
<dt>forum:</dt> <dd>un forum quoi.</dd>
</dl>
<h3>Les functions d'administration qui ce découpent en 2 partie principal</h3>
<dl>
<dt>Admin du restau/resa:</dt> <dd>admin les cartes et les menus(crud), Admin d'un systeme de resa</dd>
<dt>Admin du forum/livre d'or:</dt> Gestion des user et commentaires <dd></dd>
</dl>
</div>";

?>
