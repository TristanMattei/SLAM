<?php
$tab=array("Dupont"=>array("Paul","Paris",27),"Schmoll"=>array("Kir
k","Berlin",35),"Smith"=>array("Stan","Londres",45));
foreach($tab as $cle=>$valeur)
{
echo "<b>Elément $cle :</b><br />";
foreach($valeur as $ind=>$val)
{
echo "elément $ind :", $val, "<br />";
}
}
?>
