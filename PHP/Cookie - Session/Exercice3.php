<?php
//Détection du cookie et redirection éventuelle vers la page préférée
if(isset($_COOKIE['mapage']))
{
 $page=$_COOKIE['mapage'];
 header("Location:$page");
}
//
if(isset($_POST['mapage']))
{
 setcookie("mapage",$_POST['mapage'],time()+30);
 header("Location:$page");
 echo "Vous avez choisi ",$_POST['mapage'],"<br />";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Choisissez votre page préférée</title>
 </head>
 <body>
  <form method="post" action="Exercice3.php">
   <fieldset>
    <legend>Choisissez votre page préférée</legend>
    <select name="mapage">
     <option value="Exercice3.php">Accueil</option>
     <option value="Exercice300.1.php">Cinéma</option>
     <option value="Exercice3.1.php">Voyages</option>
    </select>
    <br />
    <input type="submit" value="Envoyer" />&nbsp;&nbsp;
    <input type="reset" value="Effacer" />
   </fieldset>
  </form>
 </body>
</html>
