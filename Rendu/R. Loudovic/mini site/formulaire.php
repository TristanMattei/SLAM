<?php
  define('LOGIN','loudovic');
  define('PASSWORD','1234a');
  $message = '';
 
  if(!empty($_GET))
  {
    if(empty($_GET['login']))
    {
      $message = 'Veuillez indiquer votre login';
    }
      elseif(empty($_GET['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe';
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
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="formulaire1.php" method="get">
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