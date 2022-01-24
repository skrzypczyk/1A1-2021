<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		/*
		function helloWorld(){

			echo "Salut";

		}

		helloWorld();
		




		function helloYou($you){
			//va chercher une variable globale du nom de firstname
			//global $firstname;
			//Variable locale
			echo "Bonjour ". $you;

		}


		//Variable globale
		$firstname = "Yves";
		helloYou($firstname);

		*/


		function cleanLastname($lastname){

			$lastname = trim($lastname);
			$lastname = mb_strtoupper($lastname);

			return $lastname;
		}

		$lastname = "   skRZyPCZyk ";
		$lastname = cleanLastname($lastname);
		echo $lastname;




		function cleanFirstname($firstname){

			//....
			return $firstname;
		}

		$firstname = "  yVes ";
		$firstname = cleanFirstname($firstname);
		echo $firstname;



	?>
</body>
</html>












