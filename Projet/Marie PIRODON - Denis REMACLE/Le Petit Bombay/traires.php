<?php
$a=$_POST['nom'];
$b=$_POST['nbpers'];
$c=$_POST['meenf'];
$d=$_POST['meveg'];
$e=$_POST['mecla'];
$f=$_POST['date'];
$g=$_POST['time']
if(!empty($_POST))
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
  $req = $bdd->prepare('INSERT INTO reservations(nom, nbpers, menu1, menu2, menu3, heure) VALUES (:nom, :nbpers, :menu1, :menu2, :menu3, :heure)');
  $req->execute(array('nom' => $a,'nbpers' => $b, 'menu1' => $c,'menu2' => $d, 'menu3' => $e, 'heure' => $f $g));
  header('Location: index.php');
  die();
}
?>
