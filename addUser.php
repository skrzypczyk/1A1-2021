<?php



//Est-ce que je recois ce que j'ai demandé

if(
	empty($_POST["email"]) ||
	!isset($_POST["firstname"]) ||
	!isset($_POST["lastname"]) || 
	empty($_POST["pseudo"]) ||
	empty($_POST["password"]) ||
	empty($_POST["passwordConfirm"]) ||
	empty($_POST["country"]) ||
	empty($_POST["cgu"]) ||
	!isset($_POST["birthday"])||
	count($_POST)!=9
){

	die("Tentative de Hack ...");

}




//récupérer les données du formulaire
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$pseudo = $_POST["pseudo"];
$pwd = $_POST["password"];
$pwdConfirm = $_POST["passwordConfirm"];
$birthday = $_POST["birthday"];
$country = $_POST["country"];
$cgu = $_POST["cgu"];



//nettoyer les données

$email = strtolower(trim($email));
$firstname = ucwords(strtolower(trim($firstname)));
$lastname = mb_strtoupper(trim($lastname)));
$pseudo = ucwords(strtolower(trim($pseudo)));


//vérifier les données


//Si aucune erreur insérer l'utilisateur en base de données puis rediriger sur la page de connexion


//Si il y a des erreurs rediriger sur la page d'inscription et afficher les erreurs

