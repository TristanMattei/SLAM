<!DOCTYPE html>
<html>
<head>
	<title>MONDESIR - Exercice 3</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="page">
		<div class="title">
			<h1>MONDESIR Malik - Exercice 3</h1>
		</div>
		<form action="form.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			<fieldset>
				<legend>Connexion</legend>

				<label for="username">Login:</label><br>
				<input type="text" name="login" id="login" placeholder="Hint: Lorem" required minlength="5" maxlength="5">
				&nbsp;<img class="info" src="img/info_blue.gif" alt="info" title="Requis"><br><br>

  				<label for="password">Mot de passe:</label><br>
  				<input type="password" name="psswd" id="passwd" placeholder="Hint: Ipsum" required minlength="5" maxlength="5">
  				&nbsp;<img class="info" src="img/info_blue.gif" alt="info" title="Requis"><br><br>

  				<input type="submit" value="Se connecter"/>
  			</fieldset>
  		</form>
	</div>
</body>
</html>
