<?php
    // inclusion de la page permettant la connexion a la bdd
	include('../connexionDB.php');
	    
	    //Test si la variable "$_POST['nom']" existe ET si celle ci n'est pas vide
		if(isset($_POST['cp_depart']) && $_POST['cp_depart'] != "" 
		    && isset($_POST['cp_arrive']) && $_POST['cp_arrive'] != "" 
		    && isset($_POST['date_depart']) && $_POST['date_depart'] != ""
		    ) {
             
            /*strip_tags : desactive et transforme en texte simpte 
            toute balise HTML se qui permet d'evitée une partie des attaques par injection de code*/
            
			$n_depart = strip_tags($_POST['cp_depart']);
			$cp_depart = strip_tags($_POST['cp_arrive']);
			$date_depart = strip_tags($_POST['date_depart']);

            
			
		    //preparation de la requete SQL
			$req1 = $bdd->query(' SELECT n_depart, a_depart, v_depart, cp_depart, date_depart, heure_depart, allez_retour, prix, commentaire, flexibilite_depart, detour, n_arrive, a_arrive, cp_arrive, v_arrive, date_retour, heure_retour
									FROM trajet
									WHERE cp_depart LIKE :cp_depart AND date_depart LIKE :date_depart AND cp_arrive LIKE :cp_arrive');
			//Execution de la requete SQL
			$req1->execute(array(
				'cp_depart' => $cp_depart,
				'cp_arrive' => $cp_arrive,
				'date_depart' => $date_depart,
				));
		    }	
?>
													Sa msaoul je comprend pas ton code jpp

<?php

$reponse = $bdd->query('SELECT DISTINCT marque FROM listingVoiture');

while ($donnees = $reponse->fetch())
{
$idJeuxPossedez += 1
?>
<option value="<?php echo $donnees['marque']; ?>"><?php echo $donnees['marque']; ?></option>
<br />
<?php
}
?>	