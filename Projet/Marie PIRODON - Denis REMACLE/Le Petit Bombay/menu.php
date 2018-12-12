<!DOCTYPE html>
<html>
  <head>
    <title>Nos menus</title>
    <?php include("include/header.php"); ?>
  </head>
  <body style="background : url(images/test4.png) 0 0 fixed no-repeat;"></br>
      <?php include("include/debut_body.php"); ?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <?php
    if ($_COOKIE['connexreussie']='connecté')
    {
      include("include/menus2.php");
    }
    else
    {
      include("include/menus.php");
    }
    ?>
  </body>
  <footer>
    <?php include("include/footer.php"); ?>
  </footer>
</html>
