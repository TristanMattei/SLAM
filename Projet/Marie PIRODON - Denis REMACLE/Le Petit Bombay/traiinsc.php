<?php
$a=$_POST['nom'];
$b=$_POST['pwd'];
$c=$_POST['mail'];
$d=$_POST['adresse'];
$e=$_POST['tel'];
if(!empty($_POST))
{
  if($a==null)
  {
    header('Location: inscription.php');
  }
  elseif($b==null)
  {
    header('Location: inscription.php');
  }
  elseif($c==null)
  {
    header('Location: inscription.php');
  }
  elseif($d==null)
  {
    header('Location: inscription.php');
  }
  else
  {
    $b=crypt($b);
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    $req = $bdd->prepare('SELECT * FROM users(nom, mot_de_passe, email, adresse, telephone) WHERE (:nom,:mot_de_passe,:email,:adresse, :tel)');
    $req-> execute(array('nom' => $a,'mot_de_passe' => $b, 'email' => $c,'adresse' => $d, 'telephone' => $e));
    if (empty($req))
    {
      $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
      $req = $bdd->prepare('INSERT INTO users(nom, mot_de_passe, email, adresse, telephone) VALUES (:nom,:mot_de_passe,:email,:adresse, :tel)');
      $req->execute(array('nom' => $a,'mot_de_passe' => $b, 'email' => $c,'adresse' => $d, 'telephone' => $e));
      setcookie("connexreussie", "connecté", time()+3600);
      setcookie ("connexion", "", time() - 3600);
      header('Location: index.php');
      die();
    }
    else
    {
      setcookie("connexion", "erreur : compte existant", time()+3600);
      header('Location: inscription.php');
      die();
    }
  }
}
?>
