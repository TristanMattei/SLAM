<?php
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_GET existe alors le formulaire a été envoyé
  if(!empty($_GET))
  {
    // Le login est-il rempli ?
    if(empty($_GET['prix']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }  
    elseif ($_GET['choix'] == '5.5')
	{      // L'identification a réussi
      $prix = $_GET['prix'];
	  $prixT = $prix * 1.055;
	  $message =  ' le prix est ' . $prixT;
	}
	
	   elseif ($_GET['choix'] == '19.6')
	{      // L'identification a réussi
      $prix = $_GET['prix'];
	  $prixT = $prix * 1.196;
	  $message =  'le prix est ' . $prixT;
	}
	
    
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="./TVA.php" method="get">
      <fieldset>
        <legend>Calcul TVA</legend>
          <p>
             <label for="prix">prix :</label> 
            <input type="text" name="prix" id="prix" value="" />
          </p>        
		  <p>TVA à 5.5 ou 19.6 ?
	<input type="radio" name="choix" value="5.5" id="5.5" checked="checked" /> <label for="5.5">5.5</label>
	<input type="radio" name="choix" value="19.6" id="19.6" /> <label for="19.6">19.6</label>
	</p>
		  <p>
		  <input type="submit" name="submit" value="Calculer" />
		  </p>
      </fieldset>
    </form>
  </body>
</html>