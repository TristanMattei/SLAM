<?php

    include('connexionPDO.php');
    $req = $bdd->prepare('SELECT mail, mdp, id FROM information WHERE mail = :mail AND mdp = :mdp');
    $req->execute(array('mail' => $_POST['mail'], 'mdp' => $_POST['mdp']));
    $result = $req->fetch();

    if ($result['mail'] == 'admin@admin.com' AND $result['mdp'] == 'admin') {
        setcookie('admin', $result['id'], time() + 3600, '/');
        header('location: index.php');
    } elseif ($req->rowCount() == 1) {
        setcookie('id', $result['id'], time() + 3600, '/');
        header('location: membre.php');
    } else {
        header('location: connexion.php');
    }
?>
