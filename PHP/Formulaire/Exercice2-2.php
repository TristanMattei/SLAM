<?php
$a = $_GET['a'];
$b = $_GET['b'];
$operateur = $_GET['operateur'];

if (isset($operateur)) {
  echo "
Le résultat du calcul précédent est : "
      ."<TT>$a$operateur$b=";
  if ($operateur=="+") echo $a+$b;
  elseif ($operateur=="-") echo $a-$b;
  elseif ($operateur=="*") echo $a*$b;
  else echo $a/$b;
  echo "\n</CENTER>\n";
}
?>
