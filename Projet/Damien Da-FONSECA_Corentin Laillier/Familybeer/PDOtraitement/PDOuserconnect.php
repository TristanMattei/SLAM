<?php
include('PDOconnect.php');

//  Récupération de l'utilisateur mot d epasse
$req = $bdd->prepare('SELECT id, password, mail, prenom, nom, date_naissance, adresse, telephone, permissions FROM informations WHERE mail = :Mail AND password = :Pass');
$req->execute(array(
    'Mail' => $_POST['log_email'],
    'Pass' => $_POST['log_pass']));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['log_pass'], $resultat['Pass']);
// Gestion d'érreur du mot de passe
if (!$resultat)
{
  echo 'Mauvais mot de passe ou Email, veuillez patienter !';
  // Retour a la page d'accueil
  header('Refresh: 3 URL="../index.php"');
}
else
{
    if ($resultat) {
// Vérification des permissions de l'utilisateur
      if($resultat['permissions'] == 'GUEST')
      {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        header("location: ../index.php");
      }
      elseif($resultat['permissions'] == 'ADMIN')
      {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        header("location: ../admin/main.php");
      }
    }
    else {

      echo 'Mauvais mot de passe ou Email, veuillez patienter !';
      // Retour a la page d'accueil
      header('Refresh: 3 URL="../index.php"');
    }
}
