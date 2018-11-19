<?php
$tab=array("Dupont"=>array("Paul","Paris",27),"Schmoll"=>array("Kir
k","Berlin",35),"Smith"=>array("Stan","Londres",45));
while($element=each($tab))
{
echo "Personne: {$element['key']} <br />";
while($coord=each($element[1]))
{
echo "clé {$coord[0]} valeur {$coord[1]} <br />";
}
echo"<hr />";
}
