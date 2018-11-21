<?php
$nav = $_SERVER['HTTP_USER_AGENT'];
$explorer = 'Edge';
$pos = strpos($nav, $explorer);
echo $nav;
if ($pos !== false)
{
echo "Navigateur Internet Explorer";
$ouv = fopen("connex.txt", "a+");
fwrite($ouv, "IE");
fclose($ouv);
}
else
{
echo "Navigateur Mozilla";
$ouv = fopen("connex.txt", "a+");
fwrite($ouv, "firefox");
fclose($ouv);
}


?>
