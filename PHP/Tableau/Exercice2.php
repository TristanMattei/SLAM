<?php
$tab=array("Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=
>27),
"Schmoll"=>array("prenom"=>"Kirk","ville"=>"Berlin","age"=>35),
"Smith"=>array("prenom"=>"Stan","ville"=>"Londres","age"=>45));
foreach($tab as $cle=>$valeur)
{
echo "<b>Element $cle :</b><br />";
foreach($valeur as $cle2=>$val)
{
echo " $cle2 :", $val, "<br />";
}
}
?>
