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
		$cpt = 1;
		echo $cpt; //1
		//$cpt+=2 ---> $cpt=$cpt+2
		echo $cpt+=2; //3
		echo --$cpt; //2
		echo $cpt=$cpt+2; //4
		echo $cpt*=3; //12
		echo $cpt--; //12
		echo $cpt; //11


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

		if( 0 == null){
			echo "test";
		}

		$age = "18";

		if( $age>18 ) echo "majeur";
		elseif( $age==18 )echo "Tout juste majeur";
		elseif( $age<18 )echo "mineur";

			


	?>

</body>
</html>



