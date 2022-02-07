<?php


function connectDB(){
	//création d'une nouvelle connexion à notre bdd
	try{
		
		$pdo = new PDO( "mysql:host=localhost;dbname=projetweb1a1;port=3306" , "root" , "root" );

    	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}catch(Exception $e){
		die("Erreur SQL ".$e->getMessage());
	}


	return $pdo;
}

