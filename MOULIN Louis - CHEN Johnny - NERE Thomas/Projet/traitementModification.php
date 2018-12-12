<?php

include('connexionPDO.php');


$id=$_COOKIE['id'];
$reponse=$bdd->query("SELECT id FROM information WHERE id = $id");

if($donnee=$reponse->fetch())
{
    $reponseInfo=$bdd->prepare("UPDATE information SET  nom = :nom, prenom = :prenom, date_naissance = :date_naissance,
									postale = :postale , mail = :mail , telephone = :telephone WHERE id = $id");

    $reponseInfo->execute(array(
            'nom' => $_POST['nom'] ,
            'prenom' => $_POST['prenom'] ,
            'date_naissance' => $_POST['date_naissance'] ,
            'postale' => $_POST['postale'] ,
            'mail' => $_POST['mail'],
            'telephone' => $_POST['tel'])
    );
    header('location: membre.php');
$reponse->closeCursor();
$reponseInfo->closeCursor();
}
else
header('location: index.php');


?>