<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>
  <body>
    <!-- Navigation -->
  <?php include "navbar.php" ?>

    <!-- Header -->
  <?php include "header.php" ?>

    <!-- Contenu -->
    <?php
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
    }
    elseif(isset($_COOKIE['id'])) {
    include("connexionPDO.php");
    $id = $_COOKIE['id'];
    $req = $bdd->prepare('SELECT * FROM information WHERE id= :id');
    $req-> execute(array('id'=>$id));
    $donnees= $req->fetch(); ?>
    <div class="container">
        <div class="offset-2 col-md-8">
            <h4>Espace Membre</h4>
            <h5>Bienvenue <?php echo $donnees['nom'].' '.$donnees['prenom'] ?></h5>
            <p>Email : <?php echo $donnees['mail'] ?></p>
            <p>Date de naissance : <?php echo $donnees['date_naissance'] ?></p>
            <p>Ville : <?php echo $donnees['postale'] ?></p>
            <p>Numéro de téléphone : <?php echo $donnees['telephone'] ?></p>
            <input type="button" value="Modifier son profil" class="btn btn-primary" onClick="javascript:document.location.href='modification.php'">
        </div><br>
    </div>
    <?php }
        elseif(isset($_COOKIE['admin'])) {
            header('location: admin');
        }
    else {
        header('location: connexion.php');
    } ?>




    <!-- Pied de page -->
    <?php include "footer.php" ?>
  </body>
</html>
