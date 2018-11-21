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
  <form action="page2.php" method="post"/>
  <fieldset>
  <?php
  echo "<label for=''>Vos numéros :</label><br/><br/>";

  for($i=0;$i<5;$i++)
  {
   echo "<select name=$i>";
   for($j=1; $j<50;$j++)
   {
     echo "<option value=".$j.">".$j."</option>";
   }
   echo "</select>";
  }

  ?>
  <input type="submit" value="Valider"/>
</fieldset>
</body>


</html>
