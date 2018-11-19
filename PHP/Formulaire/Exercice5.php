<html>
<head>
<title>Formulaire</title>
</head>
<body>
<form method="POST" action="Exercice5-5.php">
<table border="0">
<tr>
<td>Votre Nom d’Utilisateur</td>
<td>
<input type="text" name="NomUti" size="20" value=" ">
</td>
</tr>
<tr>
<td>Votre Mot de Passe </td>
<td>
<input type="password" name="PassW" size="20" value=" ">
</td>
</tr>

<tr>
<td>Votre Profession</td>
<td>
<textarea rows="2" name="Profession" cols="20">
Agent immobilier
Architecte
Commerce et artisanat
</textarea>
</td>
</tr>
<tr>
<td>Votre Pays</td>
<td>

<select size="1" name="CPays">
<option>Votre Choix … </option>
<option>Pays1 </option>
<option> Paysn</option>
<option selected>choix1</option>
</select>
</td>
</tr>
<tr>

<tr>
<td>Votre Sexs</td>
<td>
<input type="radio" value="M" name="M1">Mi
<input type="radio" name="M1" value="F" checked>F
</td>
</tr>

<td>Votre Langue</td>
<td>
<select size="3" name="Langues">
<option selected>Français</option>
<option>Arabe</option>
<option>Anglais</option>
<option>Français</option>
……
<option>nLangue</option>
</select>
</td>
</tr>

<tr>
<td>Votre Loisir</td>
<td>
<input type="checkbox" name="check1" value="SP">Sport
<input type="checkbox" name=" check2" value="SP1" checked> Music
<input type="checkbox" name=" check3" value="SP2">Internet
<input type="checkbox" name=" check4" value="SP3">Voyage
<input type="checkbox" name=" check5" value="SP4">Lecture
<input type="checkbox" name=" check6" value="SP5">Recherche
</td>
</tr>
<tr>
<td>
<input type="button" value="Vider" name="btnVider">
</td>
<td>
<input type="submit" value="Valider" name="btnValider">
</td>
<td>
<input type="reset" value="Rétablir" name="btnRétablir">
</td>
</tr>
</table>
</form>
</body>
</html>
