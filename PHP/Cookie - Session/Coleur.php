<?php
if(isset($_POST['fond']) and isset($_POST['texte']))
{
if(!isset($_COOKIE['fond']) AND !isset($_COOKIE['texte']) )
{
$fond=$_POST['fond'];
$texte=$_POST['texte'];
$expir=time() + 2*30*24*3600;
setcookie('fond',$fond,$expir);
setcookie('texte',$texte,$expir);
}
else
{
$fond = $_COOKIE['fond'];
$texte = $_COOKIE['texte'];
}
}
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Couleurs du site</title>
<style type="text/css" >
<!--
body{background-color: <?php echo $fond ?> ; color: <?php echo $texte ?> ;}

-->
</style>
</head>
<body>
<form method="post" action="Coleur.php">
<fieldset>
<legend>Choisissez vos couleurs (mot clé ou code)</legend>
<label>Couleur de fond
<input type="text" name="fond" />
</label><br /><br />
<label>Couleur de texte</label>
<input type="text" name="texte" />
<br />
<input type="submit" value="Envoyer" />&nbsp;&nbsp;
<input type="reset" value="Effacer" />
</fieldset>
</form>
</body>
</html>
