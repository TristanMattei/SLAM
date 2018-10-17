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
