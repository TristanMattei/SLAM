<?php // Enormément de bugs, page à retravailler
$menu1=8;
$menu2=18;
$menu3=14;
$menu4=16;


if(isset($_POST['nombre']) && isset($_POST['date']))
      {
      setcookie ('date',$_POST['date'], time() + 365*24*3600);
      setcookie ('nombre',$_POST['nombre'], time() + 365*24*3600);
    }
    else
    {
      header("location: reservation.php");
      echo 'salt';
    }

if(isset($_COOKIE['nombre']) || $_COOKIE['nombre']<=40)
{
    include('connexionPDO.php');
    $req=$bdd->prepare('SELECT COUNT(*) FROM reservation');
    $count=$req->fetch();
      if ($count + $_COOKIE['nombre']  > 40) {
          $_SESSION['message']='Plus de place';
          header('location: reservation.php');
    }
      ?>
    <html>
<!-- Style -->
<?php include "style.php" ?>
<body>
<!-- Navigation -->
<?php include "navbar.php" ?>

<!-- Header -->
<?php include "header.php" ?>
<legend>Reservation</legend></html><?php
  for($i=1;$i<=$_COOKIE['nombre'];$i++)
  {
    echo 'Personne '.$i.' :';
     ?>
    <html>
    <form action="traitementReservation.php" method="post">
    <p>
    <select name=<?php echo $i ?>>
    <option value= "menu1"> Menu 1</option>
    <option value= "menu2"> Menu 2</option>
    <option value= "menu3"> Menu 3</option>
    <option value= "menu4"> Menu 4</option>
    </select>
  </p> </html> <?php
  }

  if(isset($_POST['1']))
  {
  for($j=1;$j<=$_COOKIE['nombre'];$j++)
  {
    $id = $_COOKIE['id'];
    $k = (string) $j;
    $reponse = $bdd->prepare('INSERT INTO reservation (id, date, menu)
                              VALUES (:id, :date, :menu)');
    $a=$reponse->execute(array('id'=>$id, 'date'=> $_COOKIE['date'], 'menu'=>$_POST[$k]));
    $reponse->closeCursor();

    $fp=fopen('reservation.txt','a+');
    fputs($fp,$_POST[$id]);
    fputs($fp,$_COOKIE['date']);
    fputs($fp,"   ");
    fputs($fp,$_POST[$k]."\r\n");
    fclose($fp);
  }
  }
}
?>
<html>
<p>
<a href="reservation.php"><input type="submit" name="submit" value="Valider"/></a>
</p>
<!-- Pied de page -->
<?php include "footer.php" ?>
</html>
<?php
setcookie ('date',$_POST['date'], time()-1, null, null, false, true);
setcookie ('date',$_POST['date'], time()-1, null, null, false, true);
?>
