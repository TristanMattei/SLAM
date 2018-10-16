<?php
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_GET existe alors le formulaire a été envoyé
  if(!empty($_GET))
  {
    // Le login est-il rempli ?
    if(empty($_GET['age']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }  
    /*elseif ($_GET['age'] >= '18')
	{      

	  $message =  ' vous êtes majeur';
	}
	
	   else
	   {
		   $message = 'vous êtes mineur';
	}*/
	
    
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>

    <form action="Exercice 2_formulaire.php" method="get">
      <fieldset>
        <legend>Vérifier votre age</legend>
          <p>
             <label for="age">Votre age :</label> 
            <input type="text" name="age" id="age" value="" />
          </p>       
		
		  <p>
		  <input type="submit" name="submit" value="Vérification" />
		  </p>
      </fieldset>
    </form>
  </body>
</html>