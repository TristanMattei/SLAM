<?php

  define('LOGIN','johnny');
  define('PASSWORD','chen');
    $message = '';
  if(!empty($_GET))
  {
    if(empty($_GET['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      elseif(empty($_GET['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      elseif($_GET['login'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }

      elseif($_GET['motDePasse'] !== PASSWORD)
    {
      $message = 'Votre mot de passe est faux !';
    }
      else
    {
      header('Location: http://localhost/PHP/Php/Page2.php');
    }
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="Exercice Formulaire.php" method="get">
      <fieldset>
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
