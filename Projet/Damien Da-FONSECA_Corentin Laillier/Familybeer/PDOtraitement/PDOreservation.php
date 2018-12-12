<?php
//Include de la connexion avec la base de donnée
include('PDOconnect.php');
// Preparation de la requete SQL permettant d'inserer la reservation de l'utilisateur dans la table "reservations"
$contact=$bdd->prepare('INSERT INTO reservations (nom, mail, personne, date_res, menu) VALUES(:Nom ,:Email,:Personne,:Date_res,:Menu)');
// Execution de la requete
$contact->execute(array(
                'Nom' => $_POST['name'],
                'Email' => $_POST['email'] ,
                'Personne' => $_POST['number'] ,
                'Menu' => $_POST['menu_res'],
                'Date_res' => $_POST['date']));

echo 'Réservation effectué, veuillez patienter !';
// Retour a la page d'accueil
header('Refresh: 3 URL="../index.php"');

$contact->closeCursor();


 ?>
