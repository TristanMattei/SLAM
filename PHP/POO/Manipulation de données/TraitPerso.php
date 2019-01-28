<?php
include 'Personnage.php';
include 'PersonnageManager.php';

$perso = new Personnage([
  'id' => 2,
  'nom' => 'Victor',
  'forcePerso' => 5,
  'degats' => 0,
  'niveau' => 1,
  'experience' => 0
]);

try {
    $db = new PDO('mysql:host=localhost;dbname=Perso', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new PersonnagesManager($db);
$manager->delete($perso);

?>
