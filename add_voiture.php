<!doctype html>
<html lang="fr">
	<?php
		//inclusion de la page traitement_inscription.php pour avoir une redirection de moins a faire
		include('traitement/traitementadd_voiture.php')
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
				<h1 class="section-header">Inscription de votre <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Voiture</span></h1>
				<h3></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method="post" name="vehicule" action="traitement/traitement_inscription.php" onsubmit="return verifForm(this)">
					<div class="col-xs-6 form-line">
			  			<div id="marque" class="form-group">
			  				<label for="marque">Marque de la voiture : </label>
					    	<select class="form-control" name="marque" required="required">
					    		<option value="choisir" selected="selected">Choisissez</option>
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
							</select><BR/>
				  		</div>
				  		<div id="age" class="form-group">
			  				<label for="profile_car_category" class="control-label">Catégorie</label>
							<select class="form-control" name="type" class="span3">
								<option value="choisir" selected="selected">Choisissez</option>
								<option value="BERLINE">Berline</option>
								<option value="TOURISM">Compacte</option>
								<option value="CABRIOLET">Cabriolet</option>
								<option value="BREAK">Break</option>
								<option value="4x4">4×4</option>
								<option value="VAN">Monospace</option>
								<option value="UTILITY">Minivan</option>
							</select>
			  			</div>
			  			<div id="sexe" class="form-group">
					    	<label for="sexe" class="control-label">Couleur de la voiture : </label>
							<select class="form-control" name="couleur" class="span3"> 
								<option value="choisir" selected="selected">Choisissez</option>
								<option value="noir">Noir</option>
								<option value="blanc">Blanc</option>
								<option value="gris fonce">Gris foncé</option>
								<option value="gris">Gris</option>
								<option value="bordeaux">Bordeaux</option>
								<option value="rouge">Rouge</option>
								<option value="bleu foncé">Bleu foncé</option>
								<option value="bleu">Bleu</option>
								<option value="vert fonce">Vert foncé</option>
								<option value="vert">Vert</option>
								<option value="marron">Marron</option>
								<option value="beige">Beige</option>
								<option value="orange">Orange</option>
								<option value="jaune">Jaune</option>
								<option value="violet">Violet</option>
								<option value="rose">Rose</option>
							</select>
			  			</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div id="modele" class="form-group">
					    	<label for="modele">Votre Modèle : </label>
					    	<input type="text" name="modele" class="form-control" placeholder=" Entrez le modèle" onblur="verifPseudo(this)">
					  	</div> <BR/>
			  			<div id="mdp" class="form-group">
			  				<label for ="place" class="control-label">Nombre de place de la voiture : </label></a>
			  			 	<input class="form-control" type="number" name="place" max="15" min="0" />
			  			</div>
			  			<div id="re_mdp" class="form-group">
			  				<label for ="re_mdp" class="control-label">Puissance de la voiture : </label>
			  			 	<input class="form-control" type="number" name="puissance" max="1000" min="50" placeholder=" En ch" />
			  			</div>
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
