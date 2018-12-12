<div class="box5">
<?php
$a=0;
$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
$req = $bdd->prepare('SELECT * FROM commentaires');
$req->execute();
$commentaires=$req->fetchAll();
$a=count($commentaires);
?>
<thead>
<tr>
 <th><?php echo "nom"; ?></th>
 <th><?php echo "note /10"; ?></th>
 <th><?php echo "commentaire"; ?></th>
</tr>
</thead>
<tbody>
<?php
// pour chaque ligne
for ($i=0; $i<=$a; $i++)
{
?>
<tr>
  <th><?php echo $commentaires[$i]['nom']; ?></th>
  <th><?php echo $commentaires[$i]['note']; ?></th>
  <th><?php echo $commentaires[$i]['commentaire']; ?></th>
</tr>
<?php
} // end for
?>
</div>
