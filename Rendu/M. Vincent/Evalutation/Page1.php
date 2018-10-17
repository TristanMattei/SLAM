<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page1</title>
    </head>
    <body>
<form action="bouton.php" method="post">
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "bonnenote" && isset($_POST['Login']) AND $_POST['Login'] ==  "MrMattei" )
    {

    ?>
        <h1>Bonjour, Monsieur Mattei</h1>
        <p>Que souhaitez vous faire a l'aide de bouton radio ? :</p>
        <div>
        <input type="radio" id="choix1"
        name="addition" value="email">
        <label for="choix1">addition</label>


        <input type="radio" id="choix2"
        name="soustraction"/>
        <label for="choix2">soustraction</label>

        <input type="radio" id="choix3"
        name="multiplication"/>
        <label for="choix3">multiplication</label>
        </div>
          <form action="page1.php" method="post">
        <p>Veuillez saisir 2 nombres :</p>
        <input type="int" name="Nombre 1" /> <br/>
        <input type="int" name="Nombre 2" /> <br/>
        <div>
    <button type="submit">Faire l'operation</button>
  </div>
        <?php

    }
    else
    {
        echo '<p>Votre login ou mot de passe est incorrect</p>';
    }
    ?>
</form>
    </body>
</html>
