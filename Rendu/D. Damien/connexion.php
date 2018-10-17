<?php

  define('identifiant','test');
  define('mdp','test');
$login=$_GET['login'];
$motdepasse=$_GET['motdepasse'];
  if($login == NULL)
    {
      echo 'Veuillez indiquer votre login svp !';
    }
      elseif($motdepasse == NULL)
    {
      echo 'Veuillez indiquer votre mot de passe svp !';
    }
      elseif($login !== identifiant)
    {
      echo 'Votre login est faux !';
    }
      elseif($motdepasse !== mdp)
    {
      echo 'Votre mot de passe est faux !';
    }
      else
    {
     echo 'Bonjour '. identifiant .' !';
    }
?>
<!DOCTYPE html>
<html>
<form name="Operation" method="get" action="operation.php">
  <p>
Chiffre 1 : <input type="number" name="nombre1"/> <br/><br>
Chiffre 2 : <input type="number" name="nombre2"/> <br/>
<input type="radio" name="choix" value="Addition" id="Addition" checked="checked" />
<label for="Addition">Addition</label> <br/>
<input type="radio" name="choix" value="Soustraction" id="Soustraction" checked="checked" />
<label for="Soustraction">Soustraction</label> <br/>
<input type="radio" name="choix" value="Multiplication" id="Multiplication" checked="checked" />
<label for="Multiplication">Multiplication</label> <br/>
<input type="submit" name="valider" value="OK"/> <br/> <br/>
</form>
</html>
