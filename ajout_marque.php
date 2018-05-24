<!DOCTYPE HTML>
<html>
	<?php
				
		$date = date("d/m/y");
		$heure = date ("h:i");
				
	?>
	<head>
		
		<!--Pour Internet Explorer. Elle permet de s'assurer qu'il utilise la dernière version du moteur de rendu.-->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--Pour les mobiles. Permet l'affichage sur tout l'espace disponible avec une taille de 1, autrement dit sans zoom-->
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Gestion des accents et caractere speciaux-->
			<meta charset="utf8">
		
		<!--permettre aux navigateurs ne prenant pas en charge HTML5 et les Media Queries CSS3-->
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
  				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]
		-->
		<title>studentCar</title>
		
		<!--inclusion des feuilles de styles-->
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/index.css" rel="stylesheet">
    	<link href="css/menu_tel.css" rel="stylesheet">
    	<link href="css/formulaireAjout.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    	
    	<!--FIN feuilles de styles-->
    	
	</head>
	<body>
		<?php include('entete.php')?>
		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Ajout <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Marque</span></h1>
				<h3></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method="post" name="inscription-formulaire" action="" onsubmit="return verifForm(this)">
					<div class="col-xs-6 form-line">
			  			<div id="marque" class="form-group">
			  				<label for="marque">Votre Marque : </label>
					    	<input type="text" name="marque" class="form-control" placeholder=" La Marque" onblur="verifNom(this)">
				  		</div>
				  		<div id="modele" class="form-group">
					    	<label for="modele">Votre Modele : </label>
					    	<input type="text" name="modele" class="form-control" placeholder=" Le Modele" onblur="verifPseudo(this)">
					  	</div>	
			  		</div>
			  		<div class="col-xs-6">
			  			<div>
			  				<form class="col-lg-5">
			  				<button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Validez</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
	</body>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		//menu_tel
		$('.menu-toggle').on('click', function(){
			$('.menu').toggleClass('active');
		});
		//fin menu_tel
		// infobulle pour le mdp
		$(function (){
			$('a').tooltip();
		});
		//fin infobulle mdp
		
	</script>
	<script type="text/javascript" src="js/verif-inscription.js"></script>
</html>

<?php
    // inclusion de la page permettant la connexion a la bdd
	include('connexionDB.php');
	    
	    //Test si la variable "$_POST['nom']" existe ET si celle ci n'est pas vide
		if(isset($_POST['marque']) && $_POST['marque'] != "" 
		    && isset($_POST['modele']) && $_POST['modele'] != "" 
		    ) {
            
            /*strip_tags : desactive et transforme en texte simpte 
            toute balise HTML se qui permet d'evitée une partie des attaques par injection de code*/
            
			$marque = strip_tags($_POST['marque']);
			$modele = strip_tags($_POST['modele']);
			
		    //preparation de la requete SQL
			$req1 = $bdd->prepare('INSERT INTO listingVoiture(marque, modele) 
									VALUES(:marque, :modele)');
			//Execution de la requete SQL
			$req1->execute(array(
				'marque' => $marque,
				'modele' => $modele
				));
				
		}
		
?>