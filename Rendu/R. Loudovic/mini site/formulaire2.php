<?php
echo "Bonjours";
$number1;
$number2;
$reponse;

  if(!empty($_GET))
  {
    if(empty($_GET['addition']))
    {
      $reponse = $number1+$number2;
    echo "le resultat est '.$repponse'";    
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