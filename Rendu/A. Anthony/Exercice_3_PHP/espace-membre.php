<?php

session_start();

define('login', 'Anthony');
define('password', 'mdp');

$title = "Espace membre";
include('header.php');

if((isset($_POST['login']) && isset($_POST['password']))) {

  $login = $_POST['login'];
  $password = $_POST['password'];

  if($login == login && $password == password) {
    $_SESSION['message'] = NULL;
  ?>


    <div>
      <form method="post" action="./resultat.php">
          <h4>Bonjour <?= $login; ?></h4><br>

          <?php
          if(isset($_SESSION['message'])) {
              echo '<span style="color: #830909"><i class="fas fa-exclamation-circle"></i> Erreur dans le formulaire merci de renseigner tout les champs</span><br><br>';
            }
          ?>

          <label>Entrez les nombres : </label>
          <input type="text" name="nombre1" id="nombre1" placeholder="Premier nombre" required></input>
          <input type="text" name="nombre2" id="nombre2" placeholder="Deuxieme nombre" required></input><br><br>

          <label for="1">Addition : </label>
          <input type="radio" name="choix" value="1" checked><br>
          <label for="2">Soustration : </label>
          <input type="radio" name="choix" value="2"><br>
          <label for="3">Multiplication : </label>
          <input type="radio" name="choix" value="3"><br><br>
          <input type="submit" value="Envoyer">

      </form>
    </div>

<?php

  } elseif($login == login && $password != password) {

    $_SESSION['message'] = "Votre mot de passe est faux";
    header('location: login.php');

  } elseif($login != login && $password == password) {

    $_SESSION['message'] = "Votre nom d'utilisateur est faux";
    header('location: login.php');

  } else {

    $_SESSION['message'] = "Erreur dans vos identifiants";
    header('location: login.php');

  }

} else {
  $_SESSION['message'] = "Un des champ n'a pas été renseigner";
  header('location: login.php');
}

?>
