<?php
require_once('../app/app.php');

if(isset($_COOKIE['user'])) {

    $session->create('message', '<h6>Déjà connecté</h6>');
    $session->create('message-box-color', 'alert-info');

    header('location: ' . root_folder . '/index.php');

} else {
    $email = ($_POST['email']);
    $psswd = ($_POST['psswd']);

    $pdo = new PDOConnect();

    $query = $pdo->pdo_start()->prepare("SELECT * FROM users WHERE email = ? AND psswd = ?");
    $query->execute([
        $email,
        $psswd
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if ($query->rowCount() == 1) {
        $session->create('message', '<h6>Connecté</h6>');
        $session->create('message-box-color', 'alert-success');
        setcookie('user', $result['id'], time() + 86400*10, '/');
        $pdo->pdo_close();
        header('location: ' . root_folder . '/index.php');

    } else {
        $session->create('message', '<h6>Erreur de connexion</h6>');
        $session->create('message-box-color', 'alert-danger');
        $pdo->pdo_close();
        header('location: ' . root_folder . '/signin.php');
    }
}
?>
