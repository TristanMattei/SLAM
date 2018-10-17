<?php
$nombre1=$_GET['nombre1'];
$nombre2=$_GET['nombre2'];
$choix=$_GET['choix'];

if ($nombre1 == NULL)
{
  echo 'Votre 1er chiffre est nul';
}
elseif ($nombre2 == NULL)
{
  echo 'Votre 2eme chiffre est nul';
}
elseif ($nombre1 > 100 || $nombre2 > 100)
{
  echo 'Veuillez saisir des valeurs inferieur a 100';
}
elseif ($choix == 'Addition')
{
  $resultat = $nombre1 + $nombre2;
  echo 'Le resultat de '.$nombre1.'+'.$nombre2.' est '.$resultat;
}
elseif ($choix == 'Soustraction')
{
  $resultat = $nombre1 - $nombre2;
  echo 'Le resultat de '.$nombre1.'-'.$nombre2.' est '.$resultat;
}
elseif ($choix == 'Multiplication')
{
  $resultat = $nombre1 * $nombre2;
  echo 'Le resultat de '.$nombre1.'*'.$nombre2.' est '.$resultat;
}

?>
