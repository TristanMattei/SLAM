<?php
$a=$_POST['nom'];
$b=$_POST['note'];
$c=$_POST['com'];
if(!empty($_POST))
{
  if($a==null)
  {
    header('Location: commentaire.php');
  }
  elseif($b==null)
  {
    header('Location: commentaire.php');
  }
  elseif($c==null)
  {
    header('Location: commentaire.php');
  }
  else
  {
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
    $req = $bdd->prepare('INSERT INTO commentaires (nom, note, commentaire) VALUES (:nom,:note,:com,)');
    $req->execute(array('nom' => $a,'mot_de_passe' => $b, 'email' => $c,'adresse' => $d));
    header('Location: commentaire.php');
    die();
  }
}
?>
