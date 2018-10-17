<html>
<body>
<?php

$_message="Veuillez saisir vos identifiants.";

echo $_message;

if(isset($_POST["identifiant"]))
{
  if($_POST["identifiant"] == "Damien")
  {
    $_message="";
  }
}

if(isset($_POST["identifiant"]))
{
  if($_POST["identifiant"] !== "Damien")
  {
    $_message="Mauvais identifiant";
  }
}

if(isset($_POST["motdepasse"]))
{
  if($_POST["motdepasse"] !== "MDP")
  {
    $_message="Mauvais mot de passe.";
  }
}

if(isset($_POST["motdepasse"]))
{
  if($_POST["motdepasse"] == "MDP")
  {
    $_message="";
  }
}



?>
<form name="motdepasse" method="post" action="TP_Exo3_2.php">
<input type=identifiant name="identifiant" size="10" value="" />
<input type=password name="motpasse" size="10" value="" />
<input type="submit" name="action onClick=(this.form)" value="OK">
</form>
</body>
</html>
