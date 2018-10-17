<?php
session_start();

$title = "Formulaire de connexion";
include('header.php');
?>

<div>
  <form method="POST" action="./espace-membre.php">
    <h3>Formulaire de connexion</h3>

    <?php
    if(isset($_SESSION['message'])) {
      echo '<span style="color: #830909"><i class="fas fa-exclamation-circle"></i> ' . $_SESSION['message'] . '</span><br><br>';
    }
    ?>

    <input type="text" name="login" id="login" placeholder="nom d'utilisateur" required></input>
    <br>
    <input type="password" name="password" id="password" placeholder="Mot de passe" required></input>
    <br>
    <input type="submit" value="Connexion"></input>

  </form>
</div>

</body>
</html>
<?php $_SESSION['message'] = NULL; ?>
