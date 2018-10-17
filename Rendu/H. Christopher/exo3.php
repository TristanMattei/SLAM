function r($url)
{
   die('<meta http-equiv="refresh" content="0;URL='src.php?nom=HOSTIN'">');
}

<html>
	<head>
		<meta charset="utf-8" />
		<title>Exercice 3 du TP1</title>
	</head>
	<body>
		<form method="get">
			<input type="text" id="nom" name="nom" />
			<input type="password" id ="mdp" name="mdp" />
			<button>Confirmer</button>
			<br/>
			<?php
			if(!empty($_GET))
			{
				if(empty($_GET))
				{
					echo "Pas d'identifiant ou pas de mot de passe signifie pas de connexion".'<br />';
				}
				if(empty($_GET['nom']) or empty($_GET['mdp']))
				{
					echo "Pas d'identifiant ou pas de mot de passe signifie pas de connexion".'<br />';
				}
				if($_GET['nom']=="HOSTIN" and $_GET['mdp']=="test")
				{
					r();
				}
				if($_GET['nom']!="HOSTIN" or $_GET['mdp']!="test")
				{
					echo "Identifiant ou mot de passe incorrect".'<br/>';
				}
			}
			?>
		</form>
	</body>
</html>