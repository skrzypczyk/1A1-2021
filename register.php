<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S'inscrire</title>
</head>
<body>

	<?php
		if(!empty($_SESSION['errors'])){
			print_r( $_SESSION['errors'] );
			unset($_SESSION['errors']);
			//session_destroy();
		}
	?>

	<form method="POST" action="addUser.php">

		<input type="email" name="email" placeholder="Votre email" required="required"><br>

		<input type="text" name="firstname" placeholder="Votre prénom"><br>
		<input type="text" name="lastname" placeholder="Votre nom"><br>
		<input type="text" name="pseudo" placeholder="Votre pseudo"  required="required"><br>

		<input type="date" name="birthday" placeholder="Votre date de naissance"><br>

		<input type="password" name="password" placeholder="Votre mot de passe"  required="required"><br>
		<input type="password" name="passwordConfirm" placeholder="confirmation" required="required"><br>

		<select name="country">
			<option value="fr">France</option>
			<option value="pl">Pologne</option>
			<option value="ml">Mali</option>
		</select>

		<input type="checkbox" name="cgu"  required="required"> CGU <br>

		<input type="submit" value="S'inscrire">

	</form>

</body>
</html>