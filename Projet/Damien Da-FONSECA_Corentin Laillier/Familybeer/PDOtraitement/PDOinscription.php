<?php

// Debut d'une session
session_start();
// Include de la connexion a la base de donnée 'Restauration'
include('PDOconnect.php');

// Preparation de la requete SQL stocké dans la variable $inscription pour inserer des informations dans la base de donnée
$inscription=$bdd->prepare('INSERT INTO informations (nom, prenom, date_naissance, adresse, mail, telephone, password) VALUES(:Nom ,:Prenom,:Date_naissance,:Adresse,:Mail,:Telephone,:Password)');


// Execution de la requete SQL avec recupération des informations du formulaire en POST
$inscription->execute(array(
                'Nom' => $_POST['nom'],
                'Prenom' => $_POST['prenom'] ,
                'Date_naissance' => $_POST['nais_date'] ,
                'Adresse' => $_POST['adresse'] ,
                'Mail' => $_POST['mail'],
                'Telephone' => $_POST['num_tel'],
                'Password' => $_POST['ins_password']));
                
echo 'L inscription est terminé, veuillez patienter !';
// Retour a la page d'accueil
header('Refresh: 3 URL="../index.php"');

$inscription->closeCursor();

?>
