<?php

/* import du fichier app */
require_once('../app/app.php');

/* verification que l'utilisateur n'est pas connecté */
if(empty($_COOKIE['user'])) {

    $session->create('message', 'Vous n\'etez pas connecté.');
    $session->create('message-box-color', 'alert-danger');

    header('location: ' . root_folder . '/login.php');

}

/* verification du bon envoie des données */
if(empty($_POST['res_date']) OR empty($_POST['menu_id']) OR empty($_POST['number'])) {

    $session->create('message', 'Erreur, un des champs est manquant.');
    $session->create('message-box-color', 'alert-danger');

    header('location: ' . root_folder . '/booking.php');
}

if($number > 40) {
    $session->create('message', 'Attention nous pouvons accueillir un maximum de 40 personnes par jour.');
    $session->create('message-box-color', 'alert-danger');

    header('location: ' . root_folder . '/booking.php');
}

/*
 * definition des variables avec une fonction anti injection SQL
 * @link https://php.net/manual/en/function.htmlspecialchars.php
 */
$res_date = ($_POST['res_date']);
$menu_id = ($_POST['menu_id']);
$number = ($_POST['number']);
$user_id = $_COOKIE['user'];

$res = new Reservation();

if($res->spaceAvailableByDate($res_date, $number) <= 40) {

    $booking = $res->createBooking($user_id, $menu_id, $number, $res_date);

    if($booking == true) {
        $session->create('message', 'Votre réservation a été prise en compte.');
        $session->create('message-box-color', 'alert-success');
        header('location: ' . root_folder . '/index.php');
    } else {
        $session->create('message', 'Erreur inconnue');
        $session->create('message-box-color', 'alert-danger');
        header('location: ' . root_folder . '/booking.php');
    }

} else {

    $session->create('message', 'Plus de place pour la date du ' . $res_date);
    $session->create('message-box-color', 'alert-danger');
    header('location: ' . root_folder . '/booking.php');

}