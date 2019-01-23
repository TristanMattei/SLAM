<?php
require 'import.php';
$nom = $_POST['nom'];
$impot = $_POST['nombre'];
$result = new Impot($nom, $impot);
 ?>
