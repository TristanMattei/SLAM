<!DOCTYPE html>
<html lang="en">

<!-- Style -->
<?php include "style.php" ?>


    <!-- Navigation -->
<?php include "navbar.php" ?>

    <!-- Header -->
<?php include "header.php" ?>

    <!-- Contenu -->
          <body>
<div class="container">
  <div class="row">
    <div class="col-md-5">
        <h1>Présentation du restaurant</h1>
        <p>Le Restaurant Caliente vous propose une cuisine italienne de qualité avec des produits frais de saison, dans un cadre sobre et élégant situé en plein coeur de Cannes et de ses commerces.<br>
           Le chef & son équipe vous proposent une cuisine italienne authentique de tradition : raviolis maison, risotto au parmesan, linguine aux fruits de mer et bien d'autres spécialités émerveilleront vos papilles.
        </p>
    </div>
    <div class="col-md-6">
      <br>
      <!-- Carousel -->
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicateur -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
          <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- Slide -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jfif" alt="Ciel Bleu" width="600" height="300">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" alt="Bateau" width="600" height="300">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpg" alt="Montagne" width="600" height="300">
          </div>
          <div class="carousel-item">
            <img src="img/4.jpg" alt="Rocher" width="600" height="300">
          </div>
          <div class="carousel-item">
            <img src="img/5.jpg" alt="Foret" width="600" height="300">
          </div>
        </div>

        <!-- Control droite et gauche -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div><!-- Row -->
</div><br><br> <!-- Container -->

<!-- Info Restaurant -->
<div class="container">
  <div class="row">
    <div class="col-md-4 responsive-column">
      <h2>Heures d'ouverture</h2>
        <div class="row">
          <div class="col-xs-6">
            <em>Du mardi au dimanche</em>
          </div>
            <div class="col-xs-6 text-right">
              <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18:00h - 22:30h</em>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <em>Lundi</em>
          </div>
          <div class="col-xs-6 text-right">
            <em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jour de fermeture</em>
          </div>
        </div>
        <div class="row"></div>
                </div><!-- .col-md-4 -->
            	<div class="col-md-4 text-center responsive-column">

                  <img src="img/imgaccueil.png" width="200" height="100">
                    <p class="logo-footer-detail">Cuisson au feu de bois </p>
                    <a href="menu.php">Choisissez votre menu !</a>
                </div><!-- .col-md-4 -->
            	<div class="col-md-4 responsive-column">
                    <h2>Moyens de paiement</h2>
                    <p>
                        <em>Chèque banquaire, espèces<br>
                        Accepte les titres restaurant</em>
                    </p><br><br><br>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div>
    </body>

    <!-- Pied de page -->
    <?php include "footer.php" ?>

</html>
