<?php
    // inclusion de la page permettant la connexion a la bdd
	include('../connexionDB.php');
	    
	    //Test si la variable "$_POST['nom']" existe ET si celle ci n'est pas vide
		if(isset($_POST['nom']) && $_POST['nom'] != "" 
		    && isset($_POST['email']) && $_POST['email'] != "" 
		    && isset($_POST['pseudo']) && $_POST['pseudo'] != ""
		    && isset($_POST['mdp']) && $_POST['mdp'] != ""
		    && isset($_POST['sexe']) && $_POST['sexe'] != ""
		    && isset($_POST['age']) && $_POST['age'] != ""
		    ) {
            
            /*strip_tags : desactive et transforme en texte simpte 
            toute balise HTML se qui permet d'evitée une partie des attaques par injection de code*/
            
			$email = strip_tags($_POST['email']);
			$pseudo = strip_tags($_POST['pseudo']);
			$mdp = strip_tags($_POST['mdp']);
			$nom = strip_tags($_POST['nom']);
			$sexe = strip_tags($_POST['sexe']);
			$age = strip_tags($_POST['age']);
            
            //Mise en minuscule de la variable "nom"
			$pseudotest = mb_convert_case($pseudo, MB_CASE_LOWER, "UTF-8");
            
			if (empty($_POST['email']))//si vide alors .....
			{
				 $email=NULL;
			}

			if (empty($_POST['pseudo']))//si vide alors .....
			{
				 $pseudo=NULL;
			}

			if (empty($_POST['mdp']))//si vide alors .....
			{
				 $mdp=NULL;
			}

			if (empty($_POST['nom']))//si vide alors .....
			{
				 $nom=NULL;
			}

			if (empty($_POST['sexe']))//si vide alors .....
			{
				 $sexe=NULL;
			}
			
			if (empty($_POST['age']))//si vide alors .....
			{
				 $age=NULL;
			}
			
		    //preparation de la requete SQL
			$req1 = $bdd->prepare('INSERT INTO utilisateur(email, pseudo, pseudotest, mdp, nom, sexe, age) 
									VALUES(:email, :pseudo, :pseudotest, :mdp, :nom, :sexe, :age)');
			//Execution de la requete SQL
			$req1->execute(array(
				'email' => $email,
				'pseudo' => $pseudo,
				'pseudotest' => $pseudotest,
				'mdp' => $mdp,
				'nom' => $nom,
				'sexe' => $sexe,
				'age' => $age
				));
				
			//Redirection du client sur la page indiqué		
			header('Location: ../index.php');
			exit;
		}
		
?>