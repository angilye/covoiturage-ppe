<?php
    // inclusion de la page permettant la connexion a la bdd
	include('connexionDB.php');
	    
	    //Test si la variable "$_POST['nom']" existe ET si celle ci n'est pas vide
		if(isset($_POST['marque']) && $_POST['marque'] != "" 
		    && isset($_POST['modele']) && $_POST['modele'] != "" 
		    && isset($_POST['place_max']) && $_POST['place_max'] != ""
		    && isset($_POST['puissance']) && $_POST['puissance'] != ""
		    && isset($_POST['couleur']) && $_POST['couleur'] != ""
		    && isset($_POST['type']) && $_POST['type'] != ""
		    ) {
             
            /*strip_tags : desactive et transforme en texte simpte 
            toute balise HTML se qui permet d'evitée une partie des attaques par injection de code*/
            
			$marque = strip_tags($_POST['marque']);
			$modele = strip_tags($_POST['modele']);
			$place_max = strip_tags($_POST['place_max']);
			$puissance = strip_tags($_POST['puissance']);
			$couleur = strip_tags($_POST['couleur']);
			$type = strip_tags($_POST['type']);
            
            
			if (empty($_POST['marque']))//si vide alors .....
			{
				 $marque=NULL;
			}

			if (empty($_POST['modele']))//si vide alors .....
			{
				 $modele=NULL;
			}

			if (empty($_POST['place_max']))//si vide alors .....
			{
				 $place_max=NULL;
			}

			if (empty($_POST['puissance']))//si vide alors .....
			{
				 $puissance=NULL;
			}

			if (empty($_POST['couleur']))//si vide alors .....
			{
				 $couleur=NULL;
			}
			
			if (empty($_POST['type']))//si vide alors .....
			{
				 $type=NULL;
			}
			
		    //preparation de la requete SQL
			$req1 = $bdd->prepare('INSERT INTO voiture(marque,modele,place_max,puissance,couleur,type)
									VALUES (:marque,:modele,:place_max,:puissance,:couleur,:type)');
			//Execution de la requete SQL
			$req1->execute(array(
				'marque' => $marque,
				'modele' => $modele,
				'place_max' => $place_max,
				'puissance' => $puissance,
				'couleur' => $couleur,
				'type' => $type
				));
				
		//Redirection du client sur la page indiqué		
		header('Location: index.php');
		exit;
		}
		
?>