<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<head>
  <link href="" rel="stylesheet">
  <link href="" rel="stylesheet">
<head/>
<link href="" rel="stylesheet">
<link href="" rel="stylesheet">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<body>
<form action="index.php" method="post">
  <div class="container">
      <div class="col-md-6">
<fieldset>
<legend>RESERVATION</legend>
  <p>
    <table>
      <tr><td><label for="Nombre_Menu_Enfant">Menu Enfant</label></td>
      <td><input type="number" name="Nombre_Menu_Enfant" min=0 id="Nombre_Menu_Enfant" value="0" /></tr></td>
      <tr><td><label for="Nombre_Menu_Adolescent">Menu Adolescent</label></td>
      <td><input type="number" name="Nombre_Menu_Adolescent" min=0 id="Nombre_Menu_Adolescent" value="0" /></tr></td>
      <tr><td><label for="Nombre_Menu_Adulte">Menu Adulte</label></td>
      <td><input type="number" name="Nombre_Menu_Adulte" min=0 id="Nombre_Menu_Adulte" value="0" /></tr></td>
      <tr><td><label for="Nombre_Menu_Adulte">Menu Special Groupe</label></td>
      <td><input type="number" name="Nombre_Menu_Special_Groupe" min=0 id="Nombre_Menu_Special_Groupe" value="0" /></tr></td>
    </table>
    <tr><td><br><br><input type="submit" name="Connexion" value="Terminer" /></tr></td>
  </p>
</fieldset>

</form>
</body>
</html>

<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8','root','');
}
catch (Exception $e)
{
  die ('Erreur : '.$e ->getMessage());
}

$m_enfant= $_GET['Nombre_Menu_Enfant'];
$m_adolescents= $_GET['Nombre_Menu_Adolescent'];
$m_adultes= $_GET['Nombre_Menu_Adulte'];
$m_groupes= $_GET['Nombre_Menu_Special_Groupe'];

$req = $bdd ->prepare ('INSERT INTO restaurant (Nombre_Menu_Enfant,Nombre_Menu_Adolescent,Nom,Prenom,Age,Metier,Pays) VALUES(:Nombre_Menu_Enfant,:Nombre_Menu_Adolescent,:Nombre_Menu_Adulte,:Nombre_Menu_Special_Groupe)');
$req->execute (array(
      'Nombre_Menu_Enfant'=>$login,
      'Nombre_Menu_Adolescent'=>$mdp,
      'Nombre_Menu_Adulte'=>$nom,
      'Nombre_Menu_Special_Groupe'=>$prenom,
    ));

 ?>
