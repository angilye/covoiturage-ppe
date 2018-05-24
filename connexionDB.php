<?php
	//lancement de la gestion des sessions par le navigateur
	
	session_start(); // On démarre la session AVANT toute chose
		
		//connexion a la BDD
		try
		{	
			//configuration de la connexions a la BDD avec comme nom "$bdd"
			$bdd = new PDO('mysql:host=localhost;dbname=covoiturage;charset=utf8', 'root', '');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e)
		{
			//Si erreur de la connexion tuer la connexion et renvoyer le message d'erreur de mysql
		    die('Erreur : '.$e->getMessage());
		}

?>