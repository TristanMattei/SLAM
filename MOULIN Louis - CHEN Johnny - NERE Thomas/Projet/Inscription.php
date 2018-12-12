<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<!-- Style -->
<?php include "style.php" ?>

<body style="border-style: 1px black">
    <div id="bloc_page" >
      <?php include "navbar.php"?>
      <?php include "header.php" ?>

      <hr style="width: 100%; height: 10px">
      <form method="POST" action="traitementinscription.php">

  <div class="container">

    <div class ="col-lg-offset-1"></div>
      <?php if(isset($_SESSION['message'])) {
          echo $_SESSION['message'];
          unset($_SESSION['message']);
      }
      ?>
    <br>
<h1 style="text-align: center; color: #00657B";>Inscription</h1>
  <div class="form-group">
    &nbsp; <label for="Nom">Nom</label>
        &nbsp;<input type="text" class="form-control" name="nom" id="Nom" placeholder="Nom">
  </div>
  <div class="form-group">
        &nbsp;<label for="Prenom">Prénom</label>
        &nbsp;<input type="text" class="form-control" name="prenom" id="Prenom" placeholder="Prenom">
  </div>
  <div class="form-group">
        &nbsp;<label for="Mdp">Mot de passe</label>
        &nbsp;<input type="password" class="form-control" name="mdp" id="Mdp" placeholder="Mot de passe (4 à 16 caractères)">
</div>

<div class="form-group">
      &nbsp;<label for="date_naissance">Date de naissance</label>
      &nbsp;<input type="date" class="form-control" name="date_naissance" id="date_naissance">
  <div class="form-group">
      &nbsp;<label for="Mail">Address Mail</label>
            &nbsp;<input type="email" class="form-control" name="mail" id="Mail"  placeholder="Email">
  </div>
  <div>

  <div class="form-group">
        &nbsp;<label for="postale">Adresse Postale</label>
        &nbsp;<input type="number" class="form-control" name="postale" id="postale" placeholder="Adresse postale (5 chiffres)">
</div>
 <div class="form-group">
        &nbsp;<label for="Tel">Téléphone</label>
        &nbsp;<input type="number" class="form-control" name="tel" id="Tel" placeholder="Téléphone (10 chiffres)">
</div>

        <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>

    </div>
  </div>
    </div>
</body>
</html>
