<?php

include "ConnexionPDO.php";
session_start();

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$date_naissance = $_POST['date_naissance'];
$mail = $_POST['mail'];
$postale = $_POST['postale'];
$telephone = $_POST['tel'];

if(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['mdp']) OR empty($_POST['date_naissance'])
    OR empty($_POST['mail']) OR empty($_POST['postale']) OR empty($_POST['tel']) OR strlen($_POST['tel']) != 10
    OR strlen($_POST['postale']) != 5 OR strlen($_POST['mdp']) < 4 OR strlen($_POST['mdp']) > 16 ) {
 $_SESSION['message']='Erreur de champ';
 header('location: inscription.php');
}
else {
$req = $bdd->prepare('INSERT INTO information VALUES(:id,:nom,:prenom,:mdp,:date_naissance,:postale,:mail,:telephone)');

 $req->execute(array( 'id'=> NULL, 'nom' => $nom, 'prenom'=> $prenom , 'mdp'=> $mdp , 'date_naissance'=> $date_naissance , 'postale' => $postale , 'mail' => $mail , 'telephone' => $telephone));
header('location: connexion.php'); }



 ?>
