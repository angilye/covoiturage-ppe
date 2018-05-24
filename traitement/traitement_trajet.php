<?php
    // inclusion de la page permettant la connexion a la bdd
	include('../connexionDB.php');
	    
	    //Test si la variable "$_POST['nom']" existe ET si celle ci n'est pas vide
		if(isset($_POST['n_depart']) && $_POST['n_depart'] != "" 
		    && isset($_POST['a_depart']) && $_POST['a_depart'] != "" 
		    && isset($_POST['cp_depart']) && $_POST['cp_depart'] != ""
		    && isset($_POST['v_depart']) && $_POST['v_depart'] != ""
		    && isset($_POST['date_depart']) && $_POST['date_depart'] != ""
		    && isset($_POST['heure_depart']) && $_POST['heure_depart'] != ""
		    && isset($_POST['allez_retour']) && $_POST['allez_retour'] != ""
		    && isset($_POST['prix']) && $_POST['prix'] != "" 
		    && isset($_POST['commentaire'])
		    && isset($_POST['flexibilite_depart']) && $_POST['flexibilite_depart'] != ""
		    && isset($_POST['detour']) && $_POST['detour'] != ""
		    && isset($_POST['n_arrive']) && $_POST['n_arrive'] != "" 
		    && isset($_POST['a_arrive']) && $_POST['a_arrive'] != "" 
		    && isset($_POST['cp_arrive']) && $_POST['cp_arrive'] != ""
		    && isset($_POST['v_arrive']) && $_POST['v_arrive'] != ""
		    && isset($_POST['date_retour'])
		    && isset($_POST['heure_retour'])
		    ) {
             
            /*strip_tags : desactive et transforme en texte simpte 
            toute balise HTML se qui permet d'evitée une partie des attaques par injection de code*/
            
			$n_depart = strip_tags($_POST['n_depart']);
			$a_depart = strip_tags($_POST['a_depart']);
			$cp_depart = strip_tags($_POST['cp_depart']);
			$v_depart = strip_tags($_POST['v_depart']);
			$date_depart = strip_tags($_POST['date_depart']);
			$heure_depart = strip_tags($_POST['heure_depart']);
			$allez_retour = strip_tags($_POST['allez_retour']);
			$prix = strip_tags($_POST['prix']);
			$commentaire = strip_tags($_POST['commentaire']);
			$flexibilite_depart = strip_tags($_POST['flexibilite_depart']);
			$detour = strip_tags($_POST['detour']);
			$n_arrive = strip_tags($_POST['n_arrive']);
			$a_arrive = strip_tags($_POST['a_arrive']);
			$cp_arrive = strip_tags($_POST['cp_arrive']);
			$v_arrive = strip_tags($_POST['v_arrive']);
			$date_retour = strip_tags($_POST['date_retour']);
			$heure_retour = strip_tags($_POST['heure_retour']);
            
            
			
		    //preparation de la requete SQL
			$req1 = $bdd->prepare('INSERT INTO trajet(n_depart, v_depart, a_depart, cp_depart, date_depart, heure_depart, allez_retour, prix, commentaire, flexibilite_depart, detour, n_arrive, a_arrive, cp_arrive, v_arrive, date_retour, heure_retour)
									VALUES (:n_depart, :v_depart, :a_depart, :cp_depart, :date_depart, :heure_depart, :allez_retour, :prix, :commentaire, :flexibilite_depart, :detour, :n_arrive, :a_arrive, :cp_arrive, :v_arrive, :date_retour, :heure_retour)');
			//Execution de la requete SQL
			$req1->execute(array(
				'n_depart' => $n_depart,
				'a_depart' => $a_depart,
				'v_depart' => $v_depart,
				'cp_depart' => $cp_depart,
				'date_depart' => $date_depart,
				'heure_depart' => $heure_depart,
				'allez_retour' => $allez_retour,
				'prix' => $prix,
				'commentaire' => $commentaire,
				'flexibilite_depart' => $flexibilite_depart,
				'detour' => $detour,
				'n_arrive' => $n_arrive,
				'a_arrive' => $a_arrive,
				'cp_arrive' => $cp_arrive,
				'v_arrive' => $v_arrive,
				'date_retour' => $date_retour,
				'heure_retour' => $heure_retour
				));
				
		//Redirection du client sur la page indiqué		
		header('Location: ../index.php');
		exit;
		}
		
?>