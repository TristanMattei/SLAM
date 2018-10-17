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
  echo 'Saisir des valeur en dessous de 100 !';
}
elseif ($choix == 'Addition')
{
  $resultat = $nombre1 + $nombre2;
  echo 'L addition de' .$nombre1.'+'.$nombre2.' est '.$resultat;
}
elseif ($choix == 'Soustraction')
{
  $resultat = $nombre1 - $nombre2;
  echo 'La soustraction de '.$nombre1.'-'.$nombre2.' est '.$resultat;
}
elseif ($choix == 'Multiplication')
{
  $resultat = $nombre1 * $nombre2;
  echo 'La multiplication de '.$nombre1.'*'.$nombre2.' est '.$resultat;
}

?>
