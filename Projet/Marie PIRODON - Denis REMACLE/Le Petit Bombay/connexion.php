<!DOCTYPE html>
<html>
  <head>
    <title>connexion</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
      <?php include("include/debut_body.php"); ?>
    <center>
    </br></br></br></br></br></br></br></br></br>
    <div class="box2">
      <br><h3><p>Connexion</p></h3><br>
      <div class="form-group">
        <form action="traicon.php" method="post">
          <label>Email</label>
          <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="" >
          <label>Mot de passe</label>
          <input type="password" name="pwd" class="form-control">
          <a><button type="submit" value="connexion" class="button5">Connexion</button></a>
          <a href="inscription.php"><button type="button" name="button5" class="button5">créer un compte</button></a>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <?php include("include/footer.php"); ?>
  </footer>
</html>
