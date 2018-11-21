<!DOCTYPE html>
<html>
<head>
  <title>Loterie en ligne</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="loterie.css"/>
</head>
<body>

  <div class="titre">
  <h1>LA SUPER LOTERIE</h1>
</div>
<br/>
<br/>
<br/>
<div class="titre">
<h4>
<?php

$file=fopen("loterie.txt","r");

$T = fgets($file);
$T2 = explode('-', $T);



if($T2[0]==$_POST['0'] && $T2[1]==$_POST['1'] && $T2[2]==$_POST['2'] && $T2[3]==$_POST['3'] && $T2[4]==$_POST['4'])
{
  echo 'Félicitations vous avez gagner ... 1 euros<br/>';
  echo '<a href="loterie.php"><button type = "button">Recommencer</button></a>';
}
else {
  echo 'vous avez perdu<br/>';
  echo '<a href="loterie.php"><button type = "button">Recommencer</button></a>';
}
fclose($file);

?>
</h4>
</div>
<br/>
<br/>
<br/>

</body>


</html>
