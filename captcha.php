<?php

	header("Content-Type: Image/png");


	$image = imagecreate(300, 150);


	$back = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));
	
	$black = imagecolorallocate($image, 0, 0, 0);


	$char = "abcdefghijklmnopqrstuvwxyz0123456789";
	$char = str_shuffle($char);
	$captcha = substr($char, 0, rand(6,8));


	imagestring($image, 5, 100, 70, $captcha, $black);



	/*
		Consignes :
			- Créer un dossier "font" avec dedans 3 polices au format ttf (dafont)
			- Intégrer dans l'image le texte en respectant :
				-> Une couleur aléatoire pour le fond
				-> Une couleur aléatoire par caractère
				-> Un angle  aléatoire par caractère
				-> Une taille et une position aléatoires par caractère
				-> Une police aléatoire par caractère en cherchant dans le dossier font, si j'ajoute une police elle doit être prise en compte automatiquement sans modifier le code
				-> Des formes aléatoires derrière les caractères avec des couleurs déjà utilisées (Nb aléatoire)

			Attention à la lisibilité (et du code)

	*/




	imagepng($image);