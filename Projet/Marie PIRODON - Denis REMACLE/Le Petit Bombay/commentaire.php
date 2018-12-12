<!DOCTYPE html>
<html>
  <head>
    <title>Espace commentaire</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
    <?php include("include/debut_body.php"); ?>
    <center>
    </br></br></br></br></br></br></br></br></br>
    <div class="box">
      <br><h3><p>Commenter</p></h3><br>
      <div class="form-group">
        <form action="traicom.php" method="post">
          <label>nom</label>
          <input type="text" name="nom" class="form-control">
          <label>note</label>
          <input type="number" name="note" class="form-control" max="10" min="0">
          <label>commentaire</label>
          <input type="texte" name="com" class="form-control">
          <a><button type="submit" value="connexion" class="button5">Commenter</button></a>
        </form>
      </div>
    </div>
    <?php include("include/commentaires.php"); ?>
    </body>
    <footer>
    <?php include("include/footer.php"); ?>
    </footer>
</html>
