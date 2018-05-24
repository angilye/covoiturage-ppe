<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
  <head>
    <title>Resultat de la Recherche</title>
	<link href="Monstyle.css" rel="stylesheet" type="text/css">
	</head>
   <body>
	 <h1 align="center">Resultat de la Recherche</h1>
	 <BR>
	 <BR>
	<BR>	 
	<?php
		include('connexionDB.php');
	
		/*$cp_depart = strip_tags($_POST['cp_depart']);
		$cp_arrive = strip_tags($_POST['cp_arrive']);
		$date_depart = strip_tags($_POST['date_depart']);*/
		
			$cp_depart = strip_tags($_POST['cp_depart']);
			$date_depart = strip_tags($_POST['date_depart']);
			$cp_arrive = strip_tags($_POST['cp_arrive']);
		
		$requete = $bdd->query ('SELECT * 
								FROM trajet 
								WHERE cp_depart LIKE '.$cp_depart.' AND cp_arrive LIKE '.$cp_arrive.' AND date_depart LIKE "'.$date_depart.'"');
								
		/*$requete->execute(array(
							'cp_depart' => $cp_depart,
							'cp_arrive' => $cp_arrive,
							'date_depart' => $date_depart,
							));*/
				
			echo "<table><tr><th>ville de depart</th><th>cp de depart</th><th>cp arrivee</th><th>date depart</th></tr>";
			while ($donnees = $requete->fetch())
			{
			$v_depart = $donnees['v_depart'];

    		$cp_depart = $donnees['cp_depart'];
    		
    		$date_depart = $donnees['date_depart'];

    		$cp_arrive = $donnees['cp_arrive'];
    		
    		echo  "<tr><td>$v_depart</td><td>$cp_depart</td><td>$cp_arrive</td><td>$date_depart</td></tr>";
				
			}
			
			
			

	?>
	<div>
	 <a href="index.php"> Retour  </a> <br>
	 </div>
	</body>
</html>