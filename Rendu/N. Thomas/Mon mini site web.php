<?php
  
  define('LOGIN','nere'); 
  define('PASSWORD','thomas');
  $message = ''; 

  if(!empty($_POST))
  {
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }
      elseif($_POST['motDePasse'] !== PASSWORD)
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
<head>
        <title> Mon mini site web</title>
</head>
<body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
<form action="Mon mini site web.php" method="post">
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

<!DOCTYPE html>
<head>
        <title>Calcul</title>
</head>

<form action="Mon mini site web.php" method="post">
    <fieldset>
        <legend>Selectionner un mode de calcul</legend>

        <div>
            <input type="radio" id="addition"
                   name="calcul" value="addition" checked />
            <label for="addition">Addition</label>
        </div>

        <div>
            <input type="radio" id="soustraction"
                   name="calcul" value="soustraction" />
            <label for="soustraction">Soustraction</label>
        </div>

        <div>
            <input type="radio" id="multiplication"
                   name="calcul" value="multiplication" />
            <label for="multiplication">Multiplication </label>
        </div>
        <input type="number" name="Combien">
        <input type="number" name="Combien">

    </fieldset>
</form>