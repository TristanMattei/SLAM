
<html><body>
<?php
$lignes = $_GET['lignes'];
$table = $_GET['table'];
if (isset($table)) { // si on utilisé le formulaire...
  echo "\n";
   for ($l=0;$l<=$lignes;$l++) { // afficher les lignes de la table
     echo "<table><tr><td>$l<td>×</td><td>$table</td><td>=</td><td>" .($l*$table)."</td></tr>\n"; } echo "</table>\n";
  }

    ?>
</html>
</body>
