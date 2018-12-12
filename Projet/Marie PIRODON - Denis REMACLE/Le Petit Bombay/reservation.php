<!DOCTYPE html>
<html>
  <head>
    <title>Réservez</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
    <?php include("include/debut_body.php"); ?>
    <center>
    </br></br></br></br></br></br></br></br></br>
    <div class="box">
      <br><h3><p>Réservation</p></h3><br>
      <div class="form-group">
        <form action="traires.php" method="post">
          <label>nom</label>
          <input type="text" name="nom" class="form-control">
          <label>Nombre de personnes</label>
          <input type="number" name="nbpers" class="form-control" max="40" min="1">
          <label>menus enfant</label>
          <input type="number" name="meenf" class="form-control" max="40" min="0">
          <label>menus Végétarien</label>
          <input type="number" name="meveg" class="form-control" max="40" min="0">
          <label>menus Classique</label>
          <input type="number" name="mecla" class="form-control" max="40" min="0">
          <label>Date et heure</label>
          <input type="date" name="date" class="form-control"><input type="time" name="time" class="form-control">
          <a><button type="submit" value="connexion" class="button5">Réserver</button></a>
        </form>
      </div>
    </div>
    <?php include("include/commentaires.php"); ?>
    </body>
    <footer>
    <?php include("include/footer.php"); ?>
    </footer>
</html>
