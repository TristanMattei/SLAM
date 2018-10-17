<?php
echo "Bonjours";
$number1;
$number2;
$reponse;
if(!empty($_GET))
  {
    if(empty($_GET['nombre1']) || $_GET['nombre2']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }  
  {
     elseif ($_GET['choix'] == 'addition')
    {      // L'identification a réussi
      $number1 = $_GET['nombre1'];
     $number2 = $_GET['nombre2'];
	  $reponse = $number1+$number2;
	  $message =  ' le prix est ' . $reponse;
	}
    {
      $reponse = $number1+$number2;
    }
  elseif(empty($_GET['soustraction']))
    {
      $reponse = $number1-$number2;
    }
  elseif(empty($_GET['multiplication']))
    {
      $reponse = $number1*$number2;
    }
    else
    {
      $message = 'Erreur!';
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Calcul</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="formulaire2.php" method="get">
      <fieldset>
        <legend>Addition, Sousraction ou Multiplication</legend>
          <p>
             <label for="login">Addition</label> 
            <input type="radio" name="choix" id="additon" value="additon" /> <label for="addition">addition</label>
          </p>
          <p>
            <label for="login">Soustraction</label> 
            <input type="radio" name="choix" id="soustraction" value="soustraction" />
          </p>
          <p>
            <label for="login">Multiplication</label> 
            <input type="radio" name="choix" id="multiplication" value="multiplication" /> 
          </p>
          <form action="formulaire2.php" method="get">
          <legend>Calcul</legend>
          <p>
             <label for="login">NOMBRE1</label> 
            <input type="text" name="number1" id="number1" value="" />
            <label for="login">NOMBRE2</label> 
            <input type="text" name="number2" id="number2" value="" />
             <input type="submit" name="submit" value="Calculer" /> 
          </p>	  
      </fieldset>
    </form>
  </body>
</html>