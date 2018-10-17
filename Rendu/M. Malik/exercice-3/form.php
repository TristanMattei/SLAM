<?php
  		if (!isset($_POST['login']) || !isset($_POST['psswd']))
  		    echo '<p>Information(s) manquante(s).</p>';
  		elseif ($_POST['login'] != 'Lorem' || $_POST['psswd'] != 'Ipsum')
  			echo '<p>Information(s) incorrecte(s)</p>';
  		else
				echo 'Vous êtes connecté';
?>
