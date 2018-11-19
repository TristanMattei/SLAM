<?php
$tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.o
rg","SQLite"=>"http://www.sqlite.org");
$site=array_rand($tab);
echo "Site recommandé : <a href=\"$tab[$site]\" > ",$site,"</a>";
?>
