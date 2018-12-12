<?php
/* import du fichier app */
require_once('../app/app.php');

/* verification que l'utilisateur n'est pas connecté */
if(isset($_COOKIE['user'])) {
    $session->create('message', 'Vous etez déjà connecté.');
    $session->create('message-box-color', 'alert-info');

    header('location: ' . root_folder . '/index.php');

}

    /* Vérification du bon envoi des données */
if (empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['psswd']) OR empty($_POST['email']) OR empty($_POST['postal']) OR empty($_POST['birth']) OR empty($_POST['phone'])) {
    $session->create('message', '<h6>Un ou plusieurs champs manquant(s)</h6>');
    $session->create('message-box-color', 'alert-danger');

    header('location: ' . root_folder . '/signup.php');
}

$nom = ($_POST['nom']);
$prenom =($_POST['prenom']);
$psswd = ($_POST['psswd']);
$email = ($_POST['email']);
$postal = ($_POST['postal']);
$birth = ($_POST['birth']);
$phone = ($_POST['phone']);

$user = new User();
$register = $user->createUser($nom, $prenom, $psswd, $birth, $postal, $email, $phone);

if($register == 0) {
    $session->create('message', 'Erreur, email et/ou numéro de téléphone déjà utilisé(s).');
    $session->create('message-box-color', 'alert-danger');

    header('location: ' . root_folder . '/signup.php');
} else {
    $session->create('message', '<h6>Inscription réussie</h6>');
    $session->create('message-box-color', 'alert-success');
    header('location: ' . root_folder . '/signin.php');
}

?>
