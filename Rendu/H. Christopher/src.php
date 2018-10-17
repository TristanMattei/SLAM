<?php
	$login=$_GET['nom'];
	echo "Bienvenue Mr.$login";
?>

<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<br/><br/>
		<p>Choississez la méthode de calcul voulue</p>
		<form method="post">
				<input type="radio" name="+" id="add" value="+"/>
				<label for="add">Addition</label>
				<br/>
				<input type="radio" name="-" id="sous" value="-"/>
				<label for="sous">Soustraction</label>
				<br/>
				<input type="radio" name="*" id="mul" value="*"/>
				<label for="mul">Multiplication</label>
				<br/>
				<select>
					<option name="+" value="+">Addition</option>
					<option name="-" value="-">Soustraction</option>
					<option name="*" value="*">Multiplication</option>
				</select>
				<br/>
		</form>
	</body>
</html>