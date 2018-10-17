<?php
  $LOGIN='test';  // Login
  $PASSWORD'test';  // Mot de passe
  $message = '';

  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      // Le login est-il correct ?
      elseif($_POST['login'] != $LOGIN)
    {
      $message = 'Votre login est faux !';
    }
      // Le mot de passe est-il correct ?
      elseif($_POST['motDePasse'] != $PASSWORD)
    {
      $message = 'Votre mot de passe est faux !';
    }
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';      
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire d'identification</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
      <fieldset>
        <form action="./bonjour.php" method="post">
        <legend>Identifiant</legend>
          <p>
             <label for="login">Login :</label>
            <input type="text" name="login" id="login" value="" />
          </p>
          <p>
            <label for="password">Mot de passe :</label>
            <input type="password" name="motDePasse" id="password" value="" />
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
  </body>
</html>
