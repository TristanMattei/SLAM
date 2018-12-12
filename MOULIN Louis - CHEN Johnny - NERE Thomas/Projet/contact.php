<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>
<link rel="stylesheet" href="contact.css">
<body>

  <!-- Navigation -->
<?php include "navbar.php" ?>

  <!-- Header -->
<?php include "header.php" ?>

  <!-- Contenu -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <div class="container contact-form">
              <div class="contact-image">
                  <img src="img/imgaccueil.png" width="200" height="100"/>
              </div>
              <form method="post">
                  <h3>Nous contacter</h3>
                 <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" name="txtName" class="form-control" placeholder="Votre nom *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" name="txtEmail" class="form-control" placeholder="Votre Email *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" name="txtPhone" class="form-control" placeholder="Votre Numéro de Téléphone *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <textarea name="txtMsg" class="form-control" placeholder="Votre Message *" style="width: 100%; height: 150px;"></textarea>
                          </div>
                      </div>
                  </div>
              </form>
  </div>
  <!-- Pied de page -->
  <?php include "footer.php" ?>




</body>
</html>
