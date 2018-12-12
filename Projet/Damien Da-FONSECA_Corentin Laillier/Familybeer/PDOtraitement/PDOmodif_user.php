<?php

// Include de la connexion a la base de donnée 'Restauration'
include('PDOconnect.php');

// Debut d'une session
session_start();

// Selection des "id" de la table "informations" de l'utilisateurs connecté avec "$_SESSION" et stockage dans la variable "$reponse"
$reponse=$bdd->query('SELECT id FROM informations WHERE id = \''.$_SESSION['id'].'\' ');

if($donnee=$reponse->fetch())
{
// Update des informations de l'utilisateur dans la base de donnée
$reponseEtudiant=$bdd->prepare('UPDATE informations SET  nom = :Nom, prenom = :Prenom, date_naissance = :Date_naissance, adresse = :Adresse,
                      mail = :Mail, telephone = :Telephone, password = :Password WHERE id = \''.$_SESSION['id'].'\' ');

// Execution de la requete SQL
$reponseEtudiant->execute(array(
                  'Nom' => $_POST['mod_nom'],
                  'Prenom' => $_POST['mod_prenom'] ,
                  'Date_naissance' => $_POST['mod_nais_date'] ,
                  'Adresse' => $_POST['mod_adresse'] ,
                  'Mail' => $_POST['mod_mail'],
                  'Telephone' => $_POST['mod_num_tel'],
                  'Password' => $_POST['mod_password']));

echo 'La modification est terminé, veuillez patienter !';
// Retour a la page d'accueil
header('Refresh: 3 URL="../Espace_membre.php"');

$reponseEtudiant->closeCursor();

}
?>
