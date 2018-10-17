<?php
  $a='';
  $b='';
  $reponse='';
  $message = '';
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['nombre1']))
    {
      $message = 'Veuillez indiquer un nombre a !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['nombre2']))
    {
      $message = 'Veuillez indiquer un nombre b !';
    }
      // Le login est-il correct ?
      elseif($_POST['choixa'] == 1)
    {
      $message = 'vous avez choisi une addition';
      $reponse = $a + $b;
    }
      elseif($_POST['choixb'] == 1)
    {
      $message = 'vous avez choisi une soustration';
      $reponse = $a - $b;
    }
      elseif($_POST['choixc'] == 1)
    {
      $message = 'vous avez choisi une multiplication';
      $reponse = $a * $b;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bonjour</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="./calcul.php" method="post">
      <fieldset>
        <legend>Choisissez le calcul</legend>
          <p>
             <label for="a">Nombre 1 :</label>
            <input type="number" name="nombre1" id="a" value="" />
          </p>
          <p>
            <label for="b">Nombre 2 :</label>
            <input type="number" name="nombre2" id="b" value="" />
            <p>addition</p>
            <input type="radio" name="choixa" value="addition" />
            <p>soustraction</p>
            <input type="radio" name="choixb" value="soustraction" />
            <p>multiplication</p>
            <input type="radio" name="choixc" value="division" />
            <input type="submit" name="submit" value="Calculer" />
          </p>
      </fieldset>
    </form>
  </body>
</html>
