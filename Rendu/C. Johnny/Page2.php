<?php
$message=   '';
define('LOGIN','johnny');
define('PASSWORD','chen');
echo 'Bonjour '. LOGIN .' !';

?>
<br><br>
<p>Choisissez une action </p>

<form name="form1" method="post" action="Page2.php">
<fieldset>
  <input type="radio" name="x" value="un">
  <label for="addition">Addition</label>
  <br><input type="radio" name="x" value="deux" >
  <label for="soustraction">Soustraction</label>
  <br><input type="radio" name="x" value="trois" >
  <label for="multiplication">Multiplication</label>
</fieldset>
</form>


<p> Saisissez 2 nombres</p>
<html>
  <form action="Page2.php" method="get">
    <fieldset>
  <input type="text" name="nbre1" id="nbre1" value="" /> <p> et </p>
  <input type="text" name="nbre2" id="nbre2" value="" />

  <input type="submit" name="submit" value="Valider">
</fieldset>
</form>
<html>

<?php

$nbre1 = $_GET[''];
$nbre2 = $_GET[''];
$message = '';

header ('Location: http://localhost/PHP/Php/Calcul.php')

 ?>
