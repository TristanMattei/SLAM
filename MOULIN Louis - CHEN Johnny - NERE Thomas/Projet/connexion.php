<?php if(isset($_COOKIE['id']) OR isset($_COOKIE['admin'])) {
header('location: index.php');
} else { ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>

    <!-- Navigation -->
  <?php include "navbar.php" ?>

    <!-- Header -->
  <?php include "header.php" ?>

    <!-- Contenu -->
    <!-- <body>
      <h1>Connexion</h1>
       Formulaire de connexion
      <form action="traitementConnexion.php" method="post">
        Adresse mail : <input type="text" name="mail"/> <br/>
        Mot de passe : <input type="password" name="mdp"/> <br/>
        <input type="submit" value="Connexion" class=""></p>
      </form>
      Nouveau sur notre site ?<a style="color: #0366D9;" href="inscription.php">Inscrivez-vous ici</a>
    </body> -->

        <nav class="navbar navbar-fixed-top">
            <div class="container">
                </br>
                <div class="panel panel-primary container">
                    <div style="color: #00657B" class="panel-heading"><h3 class="panel-title"><strong> Se connecter</strong></h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="traitementConnexion.php" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    Adresse mail <input type="text" name="mail"placeholder="Entrez votre adresse mail" class="form-control input-md"/>
                                    <a class="pull-right" href="inscription.php">Créer un compte</a>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                    Mot de passe <input type="password" name="mdp" placeholder="Entrez votre mot de passe" class="form-control input-md"/>
                                </div>
                                <!-- Button -->
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary">Connexion</button>
                                    </div>

                                </div>
                        </form>

                    </div>
                </div>


            </div>
        </nav>






  <!-- Pied de page -->
    <?php include "footer.php" ?>
</html>
<?php } ?>