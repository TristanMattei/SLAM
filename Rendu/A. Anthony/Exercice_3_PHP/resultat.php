<?php

session_start();


$title = "Page de resultat";
include('header.php');

echo "<div>";

if(isset($_POST['choix']) && isset($_POST['nombre1']) && isset($_POST['nombre2'])) {

    $choix = $_POST['choix'];
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];

    if($choix == 1) {
      echo "Voici le resultat de votre Addition : <br><br> $nombre1 + $nombre2 : ";
      echo $nombre1+$nombre2;
    } else if($choix == 2) {
      echo "Voici le resultat de votre Soustration : <br><br> $nombre1 - $nombre2 : ";
      echo $nombre1-$nombre2;
    } else if($choix == 3){
      echo "Voici le resultat de votre Multiplication : <br><br> $nombre1 x $nombre2 : ";
      echo $nombre1*$nombre2;
    } else {
      echo '<span style="color: #830909"><i class="fas fa-exclamation-circle"></i> Erreur choix</span>';
    }

}
if(empty($_POST['nombre1']) OR empty($_POST['nombre2']) OR empty($_POST['choix'])) {
  header('location: espace-membre.php');
}


echo "</div>";

?>
