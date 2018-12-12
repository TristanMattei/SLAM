<!DOCTYPE html>
<html>
  <head>
    <title>Modification</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
    <?php include("include/debut_body.php"); ?>
    <center>
    </br></br></br></br></br></br></br></br></br>
    <div class="box">
      <br><h3><p>Modification</p></h3><br>
      <div class="form-group">
        <form action="traimod.php" method="post">
          <label>nom</label>
          <input type="text" name="nom" class="form-control">
          <label>Email</label>
          <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="" >
          <label>Mot de passe</label>
          <input type="password" name="pwd" class="form-control">
          <label>adresse</label>
          <input type="text" name="adresse" class="form-control">
          <label>téléphone</label>
          <input type="text" name="tel" class="form-control">
          <label>Ancien email</label>
          <input type="email" name="amail" class="form-control" id="exampleInputEmail1" aria-describedby="" >
          <a><button type="submit" value="M'inscrire" class="bouton5">Modifier les parametres</button></a>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <?php include("include/footer.php"); ?>
  </footer>
</html>
