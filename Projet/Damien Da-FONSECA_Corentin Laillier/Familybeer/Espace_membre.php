<!DOCTYPE html>
<html lang="FR-fr" class="no-js">

<?php include("header.php")?>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=restauration','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$req = $pdo->prepare("SELECT * FROM informations WHERE id = ?");
$req->execute([
  $_SESSION['id'],
]);
$valeur = $req->fetch();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<section class="banner-area">
<div class="container">
  <div class="row fullscreen align-items-center justify-content-between">
    <div class="col-lg-12 banner-content">
      <h6 class="text-white"></h6>
      <br/>
      <h1 class="text-white" style="text-align: center;">Espace Membre</h1>
      <br/>

    </div>
  </div>
</div>
</section>

<body>

  <div class="container" >
<div class="row align-items-center justify-content-between" style="padding-top: 100px; padding-bottom: 100px">
<div class="col-md-6" >
<div class="panel panel-primary">
<div class="panel-heading">Les informations Personnel :</div>
 <div class="panel-body">
<div align="right"><a href='Modification_user.php'><span class='glyphicon glyphicon-tasks'></span> &nbsp Modifier ! </a></div>
<label>Nom :</label><input type='text' class='form-control'  value='<?php echo $valeur['nom']; ?>'  disabled>
  <label>Prenom : </label><input type='text' class='form-control'  value='<?php echo $valeur['prenom']; ?>' disabled>
<label>Date de naissance : </label><input type='text' class='form-control'  value='<?php echo $valeur['date_naissance']; ?>' disabled>
<label>Adresse : </label><input type='text' class='form-control'  value='<?php echo $valeur['adresse']; ?>' disabled>
<label>Email :</label><input type='text' class='form-control'  value='<?php echo $valeur['mail']; ?>' disabled>
  <label>Telephone :</label><input type='text' class='form-control'  value='<?php echo $valeur['telephone']; ?>' disabled>
    <label>Mot de passe :</label><input type='text' class='form-control' value='<?php echo $valeur['password']; ?>' disabled></br>
</div>
</div>
</div>
</div>
</div>


<?php include("footer.php") ?>


</body>
</html>
