<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ceci est ma page</title>
	<meta name='description' content="Ma page d'accueil">
</head>
<body>

	<?php

		/*
			Les variables sont auto-déclarantes
			et auto-typées
			Son type est dynamique
			Il y a des conventions écritures
			-> Camel Case
			-> Anglais
			-> Cohérence
		*/
		$myFirstname = "Yves";
		/* 
		Types :
			->Integer
			->String
			->Float
			->Boolean (true ou false)
			->Null (null)
		*/
		$myLastname;

		/*
		Opération : + - / * %
		*/
		$number1 = 3;
		$number2 = 6;
		//echo $number1 + $number2;

		/*
		Incrémentation et la décrémentation
		*/
		/*
		$cpt = 1;
		echo $cpt; //1
		//$cpt+=2 ---> $cpt=$cpt+2
		echo $cpt+=2; //3
		echo --$cpt; //2
		echo $cpt=$cpt+2; //4
		echo $cpt*=3; //12
		echo $cpt--; //12
		echo $cpt; //11
		*/


		/*
			Syntaxe pour écrire une condition
			Si l'age est sup à 18 afficher "majeur"
			Sinon si l'age est = à 18 afficher "Tout juste majeur"
			Sinon Si l'age est inf à 18 afficher "mineur"
		*/


		/*

		0 == "" //Vrai
		0 == false //Vrai
		0 == null //Vrai
		3 == true //Vrai

		!=  Différence

		*/

		/*

		if( 0 == null){
			echo "test";
		}

		$age = "18";

		if( $age>18 ) echo "majeur";
		elseif( $age==18 )echo "Tout juste majeur";
		elseif( $age<18 )echo "mineur";


		$genre = "Mr";

		switch ($genre) {
			case 'Mr':
				echo "Bonjour Monsieur";
				break;

			case 'Mme':
				echo "Bonjour Madame";
				break;

			case 'Mlle':
				echo "Bonjour Mademoiselle";
				break;

			default:
				echo "Bonjour";
				break;
		}

		if($genre == "Mr"){
			echo "Bonjour Monsieur";
		}elseif ($genre == "Mme"){
			echo "Bonjour Madame";
		}elseif ($genre == "Mlle"){
			echo "Bonjour Mademoiselle";
		}else{
			echo "Bonjour";
		}


		// Admin, Editeur, Auteur, simple internaute
		$scope = "Autre";
			
		switch ($scope) {
			case 'Admin':
				echo "Peut tout faire";

			case 'Editeur':
				echo "Il peut publier le contenu";
			
			case 'Auteur':
				echo "Il peut créer le contenu";

			default:
				echo "Il peut afficher le contenu";
				break;
		}

		if($scope == "Admin"){
			echo "Peut tout faire";
			echo "Il peut publier le contenu";
			echo "Il peut créer le contenu";
			echo "Il peut afficher le contenu";

		}elseif ($scope == "Editeur"){
			echo "Il peut publier le contenu";
			echo "Il peut créer le contenu";
			echo "Il peut afficher le contenu";
		}elseif ($scope == "Auteur"){
			echo "Il peut créer le contenu";
			echo "Il peut afficher le contenu";
		}else{
			echo "Il peut afficher le contenu";
		}

		*/

		/* La condition ternaire */
		// Juste un if ou un else
		// avec une unique et meme instruction (echo)
		// instruction (condition)?vrai:faux;

		$adult = true;

		/*
			if ($adult == true){
				echo "Adulte";
			}else{
				echo "Mineur";
			}
		*/

		//echo ($adult == true)?"Adulte":"Mineur";


		/* Le null Coalescent */
		//Si firstname est null alors il afficher "Anonyme"
		//echo $firstname??"Anonyme";


		$myFirstname = "Yves";
		// La concaténation "."
		//echo "Bonjour " . $myFirstname;
		


		// LES BOUCLES

		//à utiliser quand le nb d'itération est inconnu
		//Symbolise le lancement du dé
		/*
		$number = rand(1, 1000);
		$cpt = 1;

		while ($number != 6) {
			$number = rand(1, 1000);
			$cpt++;
		}

		echo $cpt." tentative(s)";
		*/


		do{
			...
		}while (condition);
		
		echo $cpt." tentative(s)";
		






	?>

</body>
</html>



