<?php
//Ecriture des dates
$idfile=fopen("connex.txt","a");
$date=time();
fwrite($idfile,$date);
fclose($idfile);
//Lecture des données
$idfile=fopen("connex.txt","r");
$i=1;
while($date=fgets($idfile,11))
{
 $tab[]=$date;
}
//Elimination des doublons
$tabstat=array_values(array_unique($tab));
//Affiche les dates et les heures des connexions
foreach($tabstat as $valeur)
{
 echo date("d/M H:m:s",$valeur),"<br />";
}

fclose($idfile);
?>
