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

		if( 0 == null ){
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
		$scope = "Editeur";
			
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
		

		$cpt=1;

		do{
			$number = rand(1, 12);
			$cpt++;
		}while ($number != 6);

		echo $cpt." tentative(s)";

		
		*/


		//For : nb itération connu

		
		/*
		for( $cpt=0 ; $cpt<10 ; $cpt++){
			//echo $cpt;
		}
		
		for( $cpt=1 ; $cpt<=10 ; $cpt++){
			echo $cpt;
		}
		*/




		// Tableau PHP

		$student = ["Marjorie", "Becot", 13, 14, 10];
		// Afficher Marjorie a une moyenne de 10/20
		//echo $student[0]." a une moyenne de ".(($student[2]+$student[3]+$student[4])/3)."/20";


		

		$student = [
						"firstname"=>"Pierre", 
						"lastname"=>"Michel", 
						"age"=>14,
						4
					];

		//Oups ce n'est pas le bon nom de famille
		$student["lastname"] = "Kakou";

		//Afficher Prénom Nom a age ans
		//echo $student["firstname"]." ".$student["lastname"]." a ".$student["age"]." ans";



		$student = [
						"firstname"=>["Lucas", "Jean-Claude"],  
						"lastname"=>["MILLER","DUPONT"], 
					];

		//echo $student["firstname"][1];


		//affichage d'un tableau pour debug
		//echo "<pre>";			
		//print_r($student)


		$myArray = [
						[],
						[
							[],
							[
								[
									[
										[
											[]
										]
									],
									[]
								]
							]
						]
					]; // 7 dim
		//echo "<pre>";	
		//print_r($myArray);



		$fruits = [0=>"Fraise", 1=>"Cerise", 2=>"Framboise", 3=>"Mangue"];


	?>

	<ul>
		<?php
			foreach ($fruits as $i=>$fruit) {
				//echo "<li>".$fruits[$i]."</li>";
				echo "<li>".$fruit."</li>";
			}
		?>
	</ul>



	<?php

	$class = [
				["firstname"=>"Ali", "lastname"=>"GOUMANE", "CC" => [12,14], "Partiel"=>11],
				["firstname"=>"Come", "lastname"=>"ALOISI", "CC" => [2,14], "Partiel"=>4],
				["firstname"=>"Fatima", "lastname"=>"BEN ALI", "CC" => [10,16], "Partiel"=>13],
			];

	?>


	<table border="1px">
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Moyenn</th>
		</tr>
		<?php

			foreach($class as $student){
				echo "<tr>";

				echo "<td>".$student["firstname"]."</td>";
				echo "<td>".$student["lastname"]."</td>";

				$average = (($student["CC"][0]+$student["CC"][1])/2+$student["Partiel"])/2;
				echo "<td>".$average."</td>";

				echo "</tr>";

			}


		?>
	</table>


	<img src="captcha.php">


</body>
</html>



