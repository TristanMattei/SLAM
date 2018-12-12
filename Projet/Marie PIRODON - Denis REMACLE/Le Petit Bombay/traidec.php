<?php
setcookie ("connexreussie", "", time() - 3600);
session_destroy();
header('Location: connexion.php');
die();
?>
