<?php

// Include de la base de données permettant la connexion a la base "restauration"
include('PDOconnect.php');

// Preparation de la requete SQL permettant d'inserer des valeurs dans la base de donnée dans la varialble $contact
$contact=$bdd->prepare('INSERT INTO contact (nom, email, num_telephone, message, date_contact) VALUES(:Nom ,:Email,:Num_telephone,:Message,:Date_contact)');

// Execution de requete SQL récupération des donnée du formulaire en POST
$contact->execute(array(
                'Nom' => $_POST['nom_contact'],
                'Email' => $_POST['email_contact'] ,
                'Num_telephone' => $_POST['phone_contact'] ,
                'Message' => $_POST['message_contact'],
                'Date_contact' => date("Y/m/d H:i:s")));

echo 'Votre message a été envoyé, veuillez patienter !';
// Retour a la page d'accueil
header('Refresh: 3 URL="../index.php"');


$contact->closeCursor();


 ?>
