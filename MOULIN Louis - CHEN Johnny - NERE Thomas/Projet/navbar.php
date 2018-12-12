<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="img/imgaccueil.png" alt=""></a>
    <!-- Responsivisité du site -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservation.php">Réservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plan.php">Plan</a>
        </li>
<?php if(isset($_COOKIE['admin'])) { ?> <!-- Si un admin se connecte -->
    <html>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
      <div class="dropdown-menu" style="background: rgba(0,0,0,0)">
        <a class="dropdown-item" href="admin">Panel Admin</a>
        <a class="dropdown-item" href="traitementDeconnexion.php">Déconnexion</a>
      </div>
    </li>
  </html>
<?php }
elseif(isset($_COOKIE['id'])) { ?> <!-- Si un utilisateur se connecte -->
<html>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <?php
          include("connexionPDO.php");
          $id = $_COOKIE['id'];
          $req = $bdd->prepare('SELECT * FROM information WHERE id= :id');
          $req-> execute(array('id'=>$id));
          $donnees= $req->fetch();
          $age = floor(date('Y-m-d') - $donnees['date_naissance']);
           echo $donnees['nom'] .' ';
           echo $donnees['prenom'];
echo "<br>";
          echo $age .' ans ';
          echo $donnees['postale'];
        ?></a>
    <div class="dropdown-menu" style="background: rgba(0,0,0,0)">
      <a class="dropdown-item" href="membre.php">Espace membre</a>
      <a class="dropdown-item" href="traitementDeconnexion.php">Déconnexion</a>
    </div>
  </li>
</html>
<?php } else{ ?>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">Se connecter</a>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
