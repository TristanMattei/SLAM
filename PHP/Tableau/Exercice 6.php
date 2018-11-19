<?php
//Tableau des adresses mail
$tab=array("php5@free.com","jean556@fiscali.fr","machine@waladoo.fr
","webmestre@waladoo.fr","pauldeux@fiscali.fr","macafi@fiscali.fr")
;
//Récupération des noms de domaine
foreach($tab as $ind=>$val)
{
$dom=explode("@",$val);
$domaine[]=$dom[1];
}
//Compte du nombre d'occurences de chaque domaine
$stat=array_count_values ($domaine);
//Nombre total d'adresses
$total=count($tab);
//Ou encore
//$total=array_sum($stat);
//Calcul des pourcentages
foreach($stat as $fourn=>$nb)
{
$pourcent[$fourn]=$nb/$total*100;
echo "Fournisseur d'accès : $fourn =
",round($pourcent[$fourn],2)," % <br />";
}
?>
