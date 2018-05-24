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
    	<!--FIN feuilles de styles-->
    	
	</head>
	<body id="fondDePage">
		<?php include('entete.php')?>
		<center>
			Loading...
			
			
			
		</center>	
	</body>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		//menu_tel
		$('.menu-toggle').on('click', function(){
			$('.menu').toggleClass('active');
		});
		//fin menu_tel
	</script>

</html>