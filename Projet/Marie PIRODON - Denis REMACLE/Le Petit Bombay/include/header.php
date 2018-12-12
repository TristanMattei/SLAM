<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href = "css/testtexte.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href = "css/style.css">
<link rel="stylesheet" href="css/cardtest.css">
<?php
if (isset($_COOKIE['connexreussie']))
{
  include("navbar2.php");
  session_start();
}
else
{
  include("navbar.php");
}
?>
