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
				<h1 class="section-header">Inscription à <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">StudCar</span></h1>
				<h3></h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form method="post" name="inscription-formulaire" action="traitement/traitement_inscription.php" onsubmit="return verifForm(this)">
					<div class="col-xs-6 form-line">
			  			<div id="nom" class="form-group">
			  				<label for="nom">Votre Nom : </label>
					    	<input type="text" name="nom" class="form-control" placeholder=" Entrez votre Nom" onblur="verifNom(this)">
				  		</div>
				  		<div id="pseudo" class="form-group">
					    	<label for="pseudo">Votre pseudonyme : </label>
					    	<input type="text" name="pseudo" class="form-control" placeholder=" Entrez votre pseudo" onblur="verifPseudo(this)">
					  	</div>	
					  	<div id="email" class="form-group">
					    	<label for="email">Votre adresse e-mail : </label>
					    	<input type="email" name="email" class="form-control" placeholder=" Votre Email" onblur="verifEmail(this)">
			  			</div>
			  			<div id="sexe" class="form-group">
					    	<label for="sexe" class="control-label">Votre sexe : </label>
							<select id="sexeSelect" name="sexe" class="form-control" >
								    <option value="Null" selected disabled >Choisissez</option>
									<option value="f">Femme</option>
									<option value="h">Homme</option>
							</select>
			  			</div>
			  		</div>
			  		<div class="col-xs-6">
			  			<div id="age" class="form-group">
			  				<label for ="age">Votre âge : </label>
			  			 	<input type="number" name="age" class="form-control" max="110" min="1" placeholder=" Age" onblur="verifAge(this)">
			  			</div>
			  			<div id="mdp" class="form-group">
			  				<label for ="mdp">Mot de passe : </label></a>
			  			 	<a data-toggle="tooltip" data-placement="bottom" title='Minimun 6 caractere dont 1 maj + 1 chiffre'>
			  			 	<input id="testMdp" type="password" name="mdp" class="form-control" placeholder=" *****" onblur="verifMDP(this);modifMdp(this);">
			  				</a>
			  			</div>
			  			<div id="re_mdp" class="form-group">
			  				<label for ="re_mdp">Retapez mot de passe : </label>
			  			 	<input id="reTestMdp" type="password" name="mdp" class="form-control" placeholder=" *****" onblur="verifReMDP(this)">
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