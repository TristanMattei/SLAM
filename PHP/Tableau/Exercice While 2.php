<?php
$tab=array("Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=
>27),
"Schmoll"=>array("prenom"=>"Kirk","ville"=>"Berlin","age"=>35),
"Smith"=>array("prenom"=>"Stan","ville"=>"Londres","age"=>45));
while($element=each($tab))
{
echo "Personne: {$element['key']} <br />";
while($coord=each($element[1]))
{
echo "{$coord[0]}:{$coord[1]} <br />";
}
echo"<hr />";
}
?>
