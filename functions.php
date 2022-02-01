<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

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



		function cleanLastname($lastname){

			$lastname = trim($lastname);
			$lastname = mb_strtoupper($lastname);

			return $lastname;
		}

		$lastname = "   skRZyPCZyk ";
		$lastname = cleanLastname($lastname);
		//echo $lastname;




		function cleanFirstname($firstname){
			return ucwords(strtolower(trim($firstname)));
		}

		$firstname = "  Jean PIERRE ";
		$firstname = cleanFirstname($firstname);
		echo $firstname;





		function cleanEmail(&$emailToClean){
			$emailToClean = trim($emailToClean);
			$emailToClean = mb_strtolower($emailToClean);
		}



		$email = "y.skrzyPCZYk@GmaiL.com";
		cleanEmail($email);
		echo $email;

		*/


		function hello($myFirstname="", $myLastname=""){
			echo "Bonjour ". $myFirstname. " ".$myLastname ;
		}


		$myFirstname = "Yves";
		$myLastname = "SKRZYPCZYK";

		//Bonjour Yves SKRZYPCZYK
		echo hello($myFirstname, $myLastname);


		echo hello("Pierre");

	?>
</body>
</html>












