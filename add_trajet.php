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
    	<link href="css/inscription.css" rel="stylesheet">
    	<link href="css/formulaireTrajet.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    	
    	<!--FIN feuilles de styles-->
    	
	</head>
	<body>
		<?php include('entete.php')?>
		<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Ajout d'un <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">trajet</span></h1>
				<h3></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method="post" name="trajet-formulaire" action="traitement/traitement_trajet.php" onsubmit="return verifForm(this)">
					<div class="col-xs-6 form-line">
			  			<div id="n_depart" class="form-group">
			  				<label for="n_depart">L'adresse de départ : </label>
					    	<input type="number" name="n_depart" class="form-control" max="99999" min="0" placeholder="N°Rue" onblur="verifn_adresse(this)">
				  		</div>
				  		<div id="a_depart" class="form-group">
					    	<label for="a_depart"></label>
					    	<input type="text" name="a_depart" class="form-control" placeholder="Entrez votre adresse" onblur="verifa_depart(this)">
					  	</div>
					  	<div id="cp_depart" class="form-group">
					    	<label for="cp_depart">Votre code postal : </label>
					    	<input type="number" name="cp_depart" class="form-control" max="99999" min="0" placeholder="N°CP" onblur="verifcp_depart(this)">
					  	</div>
					  	<div id="v_depart" class="form-group">
					    	<label for="v_depart">Votre ville : </label>
					    	<input type="text" name="v_depart" class="form-control" placeholder=" Votre Ville" onblur="verifv_depart(this)">
			  			</div>
			  			<div id="date_depart" class="form-group">
					    	<label for="date_depart">date de départ : </label>
					    	<input type="date" name="date_depart" class="form-control" placeholder=" YYYY-MM-DD" onblur="verifdate_depart(this)">
			  			<div id="commentaire" class="form-group">
			  				<label for="commentaire">commentaire :</label>
			  				<textarea name="commentaire" id="commentaire" placeholder=" Commentaire"></textarea>
			  			</div>
			  			</div>
			  				<div id="heure_depart" class="form-group">
					    	<label for="heure_depart">heure de départ : </label>
					    	<input type="time" name="heure_depart" class="form-control" placeholder=" HH:MM:SS" onblur="verifheure_depart(this)">
			  			</div>
			  			<div id="allez_retour" class="form-group">
					    	<label for="allez_retour" class="control-label">Allez-retour : </label>
							<input type="checkbox" name="allez_retour" class="form-control" value="1">
						</div>
						<div id="prix" class="form-group">
					    	<label for="prix">Le prix : </label>
					    	<input type="number" name="prix" class="form-control" max="999" min="1" placeholder="Prix en €" onblur="verifprix(this)">
					  	</div>
			  			
			  		</div>
			  		<div class="col-xs-6">
			  			<div id="flexibilite_depart" class="form-group">
					    	<label for="flexibilite_depart" class="control-label">Votre flexibilité : </label>
							<select id="FlexibiliteSelect" name="flexibilite_depart" class="form-control" >
								    <option value="Null" selected disabled >Choisissez</option>
									<option value="5">+/- 5minute</option>
									<option value="10">+/- 10minute</option>
									<option value="15">+/- 15minute</option>
									<option value="20">+/- 20minute</option>
							</select>
			  			</div>
			  			<div id="detour" class="form-group">
					    	<label for="detour" class="control-label">Détour : </label>
							<select id="detourSelect" name="detour" class="form-control" >
								    <option value="Null" selected disabled >Choisissez</option>
								    <option value="0">On à pas le temps</option>
									<option value="10">+/- 10minute</option>
									<option value="20">+/- 20minute</option>
									<option value="30">+/- 30minute</option>
									<option value="60">On à le temps</option>
							</select>
			  			</div>
			  			
			  			
						<div id="n_arrive" class="form-group">
			  				<label for="n_arrive">L'adresse d'arrivée : </label>
					    	<input type="number" name="n_arrive" class="form-control" max="99999" min="0" placeholder="N°Rue" onblur="verifn_arrive(this)">
				  		</div>
				  		<div id="a_arrive" class="form-group">
					    	<label for="a_arrive"></label>
					    	<input type="text" name="a_arrive" class="form-control" placeholder="Entrez votre adresse" onblur="verifa_arrive(this)">
					  	</div>
					  	<div id="cp_arrive" class="form-group">
					    	<label for="cp_arrive">Votre code postal : </label>
					    	<input type="number" name="cp_arrive" class="form-control" max="99999" min="0" placeholder="N°CP" onblur="verifcp_arrive(this)">
					  	</div>
					  	<div id="v_arrive" class="form-group">
					    	<label for="v_arrive">Votre ville : </label>
					    	<input type="text" name="v_arrive" class="form-control" placeholder=" Votre Ville" onblur="verifv_arrive(this)">
			  			</div>
			  			<div id="date_retour" class="form-group">
					    	<label for="date_retour">date de retour : </label>
					     	<input type="date" name="date_retour" class="form-control" placeholder=" YYYY-MM-DD" onblur="verifdate_retour(this)">
			  			</div>	
			  			</div>
			  				<div id="heure_retour" class="form-group">
					    	<label for="heure_retour">heure de retour : </label>
					    	<input type="time" name="heure_retour" class="form-control" placeholder=" HH:MM:SS" onblur="verifheure_retour(this)">
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