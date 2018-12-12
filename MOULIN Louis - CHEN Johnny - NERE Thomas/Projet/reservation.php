<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>
  <body>
    <!-- Navigation -->
  <?php include "navbar.php" ?>

    <!-- Header -->
  <?php include "header.php"?>

    <!-- Contenu -->
    <head>
    <meta charset="utf-8">
    <title>Réservation</title>
  </head>
<form action="traitementReservation.php" method="post">
    <fieldset>
        <legend>Reservation</legend>
        <?php if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
        ?>
        <p>
             <label for="nombre">Nombre de personnes</label>
            <input type="text" name="nombre" id="nombre" value="" placeholder= "30..."/>
          </p>
          <p>
            <label for="date">Date de reservation :</label>
            <input type="date" name="date" id="date" value="" />

          </p>

          <p>
            <input type="submit" name="submit" value="Réserver"/>
          </p>
    </fieldset>
    </form>

    <!-- Pied de page -->
    <?php include "footer.php" ?>
  </body>
</html>
