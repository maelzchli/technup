<?php
include(__DIR__ . '/../config/bdd.php');
?>

<!DOCTYPE html>

<html>

<style type="text/css">
	
	body:after{
		content:"";
		position:fixed;
		top:0;
		height:100vh;
		left:0;
		right:0;
		z-index:-50;
		background: url("./img/background.jpg") center center;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

</style>

<head>
	<link href="./css/main.css" rel="stylesheet">


	<!--Animate on scroll bank-->
	<link href="./lib/aos-master/dist/aos.css" rel="stylesheet">


	<!--Caroussel-->
	<link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick-theme.css"/>



	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Techn'up - 404</title>
	<meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
	<link rel="icon" type="image/png" href="img/favicon.webp">



	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
	<header>
		<?php include("nav.php");?>
	</header>

	<section class="blanc rubrique">
		<div class="titre" data-aos="fade-right">
			<h2>Erreur 404</h2>
		</div>
		<div class="ligne" data-aos="fade-left">
			<hr>
		</div>
		<div>
			<p>
				Page non trouvée.
			</p>
		</div>
		<div class="buttonreal">
			<a href="./index.php">
				<button>Retourner à la page d'accueil</button>
			</a>
		</div>
	</section>



	<footer>
		<?php include("footer.php");?>
	</footer>




	<script src="./lib/aos-master/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
	<script>
		new PureCounter();
	</script>
	<script src="./lib/nav.js"></script>
	<script type="text/javascript" src="./lib/slick/slick/slick.min.js"></script>
	<script src="./lib/main.js"></script>

</body>

</html>