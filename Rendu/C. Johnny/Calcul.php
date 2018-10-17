
<form action="Calcul.php" method="post">


<?php
if (value='un')
{
  $resultat = $nbre1+$nbre2;

  echo $resultat;
}
else if (value ='deux')
{
  $resultat = $nbre1-$nbre2;

  echo $resultat;
}
else if (value ='trois')
$resultat = $nbre1*$nbre2;

echo $resultat;
?>
