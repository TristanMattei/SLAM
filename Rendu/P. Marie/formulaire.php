<?php

$u = "Marie";
$p = "thomas";


if(isset($_POST['user']) && isset($_POST['password'])) {

  $user = $_POST['user'];

  $password = $_POST['password'];

  if($user == $u && $password == $p) {
    echo "Bonjour $user, veuillez saisir un mode operatoire";?>
    <html>
      <form method="post" action="#">
        <h5 style="border: 2px solid Pink;">
          <label> Addition : </label>
        <input type="radio" name= "" value"" id=""/><bre>
          <label> Soustraction: </label>
        <input type="radio" name= "" value"" id=""/>
          <label> Multiplication : </label>
        <input type="radio" name= "" value"" id=""/>
        <input type="submit" value="Valid"></input>

      </h5>
      </form>
    </html>
    <?php

 ?>
<?php
} else {
    echo 'Mauvais mot de passe ou nom d\'utilisateur';
  }


} else {
  echo "Veuillez rentrer deux nombres";
  ?>
  <html>

  <input placeholder="nombre 1"  type="text"  name="user" id="user"></input>
  <br>

  <input placeholder="nombre 2" type="password" name="password" id="password"></input>
  <input type="submit" value="Calcul"></input>
  </html>


<html>

  <form method="post" action="#">
    <h5 style="border: 2px solid Pink;">

    <label> Utilisateur : </label>
    <input placeholder="nom"  type="text"  name="user" id="user"></input>
    <br>
    <label> Password : </label>
    <input placeholder="mot de passe" type="password" name="password" id="password"></input>
  </br>
    <input type="submit" value="SEND"></input>

  </h5>
  </form>

</html>
<?php } ?>
