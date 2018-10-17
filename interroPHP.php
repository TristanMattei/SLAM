<?php

define('login','essaie');
define('mdp','jojo3');
if(!empty($_GET))
{
if($_GET['login']!== login)
 {
  echo 'Erreur d indentification, le login est mauvais';
}

if($_GET['Mdp']!== mdp)
 {
  echo 'Erreur d identification, le mot de passe est mauvais ';
}

if($_GET['Mdp']== mdp && $_GET['login']== login)
{
  echo 'Bonjour '. login . '!';
}
}
?>


<html>
<form action="interroPHP.php" method="get">
  <fieldset>
  <label for="Identifiant"> Identifiant</label>
    <input type="text" name="login" id="Identifiant" value=""/><br/><br/>
  <label for="Mdp"> Mdp </label>
  <input type="password" name="Mdp" id="Mdp" value=""/>
  <input type="submit" name="submit" value="identification"/>
</fieldset>

<form action="interroPHP2.php" method "get">
  <fieldest>
    <label for="Addition"> Addition</label>
    <input type='text' name="addition" id=Addition
</html>




</form>
