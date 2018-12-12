<?php
$a=$_POST['mail'];
$b=$_POST['pwd'];
$b=crypt($b);
$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT * FROM users (email, mot_de_passe) WHERE (:email,:mot_de_passe)');
$req-> execute(array('email' => $a,'mot_de_passe' => $b));

if (empty($req))
{
  setcookie("connexion", "erreur : mot de passe ou mail erroné", time()+3600);
  header('Location: connexion.php');
  die();
}
else
{
  setcookie("connexreussie", "connecté", time()+3600);
  setcookie ("connexion", "", time() - 3600);
  header('Location: index.php');
  die();
}
?>
