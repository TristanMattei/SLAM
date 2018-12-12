<?php
setcookie('id', $result['id'], time()-1, '/');
setcookie('admin', $result['id'], time()-1, '/');
header('location: membre.php');
 ?>
