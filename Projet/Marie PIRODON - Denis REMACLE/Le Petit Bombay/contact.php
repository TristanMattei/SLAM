<!DOCTYPE html>
<html>
  <head>
    <title>Nous contacter</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
      <?php include("include/debut_body.php"); ?>
        <br>
    <center>
    <div class="api">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2624.182614663088!2d2.2928388!3d48.8737952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fec70fb1d8f%3A0xd9b5676e112e643d!2sArc+de+Triomphe!5e0!3m2!1sfr!2sfr!4v1544297348366" width="1000" height="378" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="js/index.js"></script><br><br><br>
        <div class="boxcontact">
          <br><h3><p>Formulaire de contact</p></h3><br>
        <div class="form-group">
          <label>Votre nom</label>
          <input type="text" name="pwd" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="" >
        </div>
        <div>
          <label>Votre message</label><br>
          <textarea name="message" rows="7" cols="61"></textarea>
        </div><br>
          <a href="index.php"><button type="button" name="button" class="bouton5">Envoyer mon message</button></a><br><br>
        </div>
      </center>
  </body>
  <footer>
    <?php include("include/footer.php"); ?>
  </footer>
</html>
