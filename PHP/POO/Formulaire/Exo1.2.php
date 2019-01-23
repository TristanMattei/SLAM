<?php
include('Exo1.1.php');
//***************************
$myform = new form("traitement.php","Accès au site","post");
$myform->settext("nom","Votre nom : &nbsp;");
$myform->settext("code","Votre code : ");
$myform->setsubmit("envoi", "Envoyers");
$myform->getform();
?>
