<!DOCTYPE html>
<html lang="FR-fr" class="no-js">

<?php include("header.php")?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<section class="banner-area">
<div class="container">
  <div class="row fullscreen align-items-center justify-content-between">
    <div class="col-lg-12 banner-content">
      <h6 class="text-white"></h6>
      <br/>
      <h1 class="text-white" style="text-align: center;">Modification User</h1>
      <br/>

    </div>
  </div>
</div>
</section>

<body>
<form class="enregistrement" method="POST" action="PDOtraitement/PDOmodif_user.php">
<div class="container" >
<div class="row align-items-center justify-content-between" style="padding-top: 100px; padding-bottom: 100px">
<div class="col-md-6" >
<div class="panel panel-primary">
<div class="panel-heading">Les informations Personnel :</div>
 <div class="panel-body">

<label>Nom :</label><input type='text' class='form-control' name='mod_nom' value='<?php echo $valeur['nom']; ?>'  required>
  <label>Prenom : </label><input type='text' class='form-control' name='mod_prenom' value='<?php echo $valeur['prenom']; ?>' required>
<label>Date de naissance : </label><input type='text' class='form-control' name='mod_nais_date' value='<?php echo $valeur['date_naissance']; ?>' required>
<label>Adresse : </label><input type='text' class='form-control' name='mod_adresse' value='<?php echo $valeur['adresse']; ?>' required>
<label>Email :</label><input type='text' class='form-control' name='mod_mail' value='<?php echo $valeur['mail']; ?>' required>
  <label>Telephone :</label><input type='text' class='form-control' name='mod_num_tel' value='<?php echo $valeur['telephone']; ?>' required>
    <label>Mot de passe :</label><input type='text' class='form-control' name='mod_password' value='<?php echo $valeur['password']; ?>' required></br>
  <div align="right"><span class='glyphicon glyphicon-pencil'></span> <input type="submit" name="Valider" value="Valider"></div>
</div>
</div>
</div>
</div>
</div>
</form>

<?php include("footer.php") ?>


</body>
</html>
