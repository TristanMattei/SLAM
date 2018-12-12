<!DOCTYPE html>
<html lang="FR-fr" class="no-js">

<?php include("header.php")?>
<section class="banner-area">
<div class="container">
  <div class="row fullscreen align-items-center justify-content-between">
    <div class="col-lg-12 banner-content">
      <h6 class="text-white"></h6>
      <br/>
      <h1 class="text-white" style="text-align: center;">Mes Réservations</h1>
      <br/>

    </div>
  </div>
</div>
</section>
<body>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=restauration','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$req = $pdo->prepare("SELECT * FROM reservations WHERE id = ?");
$req->execute([
  $_SESSION['id'],
]);
$valeur = $req->fetch();
?>
<?php var_dump($valeur) ?>

<div class="container">
   <div class="row">
      <div class="col-sm-6">
           <h1><strong>Reservations</strong></h1>
           <br>
           <form>
             <div class="form-group">
               <label>Nom:</label><?php echo '  '.$valeur['nom'];?>
             </div>
             <div class="form-group">
               <label>Mail:</label><?php echo '  '.$valeur['mail'];?>
             </div>
             <div class="form-group">
               <label>Nombre de personne:</label><?php echo '  '.$valeur['personne'];?>
             </div>
             <div class="form-group">
               <label>Date de reservation:</label><?php echo '  '.$valeur['date_res'];?>
             </div>
             <div class="form-group">
               <label>Menu:</label><?php echo '  '.$valeur['menu'];?>
             </div>
           </form>
           <br>
           <div class="form-actions">
             <a class="btn btn-primary" href="gestion_menu.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
           </div>
       </div>
</div>
</div

<?php include("footer.php") ?>
</body>
</html>
