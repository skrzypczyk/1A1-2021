<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Se connecter">
	<title>Se connecter</title>
</head>
<body>

	<?php

		if( !empty($_POST['email']) &&  !empty($_POST['pwd']) && count($_POST)==2 ){

			//Récupérer en bdd le mot de passe hashé pour l'email provenant du formulaire

		}

	?>

	<form method="POST">
		<input type="email" name="email" placeholder="Votre email" required="required"><br>

		<input type="password" name="pwd" placeholder="Votre mot de passe" required="required"><br>

		<input type="submit" value="Se connecter">

	</form>

</body>
</html>