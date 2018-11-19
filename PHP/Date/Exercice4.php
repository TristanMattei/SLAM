<!DOCTYPE html>
<html>
<head>
<title>Afficher le jour de la semaine en français</title>
</head>
<body>
<?php
//Date en français
$jour = mktime(0,0,0,3,3,1993);
$semaine = array(" dimanche "," lundi "," mardi "," mercredi ","
jeudi "," vendredi "," samedi ");
echo "<h2>Le ",date("d M Y ",$jour)," était un ",
$semaine[date('w')], "</h2>";
?>
</body>
</html>
