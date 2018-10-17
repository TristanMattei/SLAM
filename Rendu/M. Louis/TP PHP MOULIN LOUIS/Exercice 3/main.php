<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <link rel ="stylesheet" href = "copiemain.css"/>
 <title>Mon site</title>
 </head>
 <body>
<div class="page">
  <div id="corps">
    <div class="site">

  <h1>Mon super site</h1>
  </div>
  <div class="photo">
    <img src ="login.png" width="100"/>
  </div>
  <form name="site" method="get" action="formulaire.php">
  <p>
    <div class="idmdp">
  Identifiant : <input type="text" name="login" id="login" value=""/> <br> <br>

  Mot de passe : <input type="password" name="motdepasse" id="password" value =""/>

  <input type="submit" name="submit" value="Identification" />
  </div>
  </p>
</form>
  <form name="Operation" method="get" action="operation.php">
    <p>
  Chiffre 1 : <input type="number" name="nombre1"/> <br/><br>
  Chiffre 2 : <input type="number" name="nombre2"/> <br/>

  <input type="radio" name="choix" value="Addition" id="Addition" checked="checked" />
  <label for="Addition">Addition</label> <br/>
  <input type="radio" name="choix" value="Soustraction" id="Soustraction" checked="checked" />
  <label for="Soustraction">Soustraction</label> <br/>
  <input type="radio" name="choix" value="Multiplication" id="Multiplication" checked="checked" />
  <label for="Multiplication">Multiplication</label> <br/>
  <input type="submit" name="valider" value="OK"/> <br/> <br/>
  </form>
</body>
</div>
</html>
