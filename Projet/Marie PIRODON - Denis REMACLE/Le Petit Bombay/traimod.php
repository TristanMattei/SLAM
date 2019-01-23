<?php
$a=$_POST['nom'];
$b=$_POST['pwd'];
$c=$_POST['mail'];
$d=$_POST['adresse'];
$e=$_POST['tel'];
$d=$_POST['email'];
if(empty($_POST))
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
  $req = $bdd->prepare('UPDATE commentaires SET (nom, mot_de_passe, email, adresse, telephone) VALUES (:nom,:mot_de_passe,:email,:adresse, :tel) WHERE (email) VALUES (:mail)');
  $req->execute(array('nom' => $a,'mot_de_passe' => $b, 'email' => $c,'adresse' => $d,'mail'=> $e));
  header('Location: index.php');
  die();
}
?>
