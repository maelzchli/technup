<?php 
include(__DIR__ . '/../config/bdd.php');
?>

<!DOCTYPE html>

<html lang="fr">

<style type="text/css">
	
	body:after{
		content:"";
		position:fixed;
		top:0;
		height:50vh;
		left:0;
		right:0;
		z-index:-50;
		background: url("./img/background.webp") center center;
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
	<link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick-theme.css" async/>



	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Techn'up - Réalisations</title>
	<meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
	<link rel="icon" type="image/png" href="img/favicon.webp">

	<script src="./lib/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


</head>

<body>
	<header>
		<?php include("nav.php");?>
	</header>
	<section class="entete">
		<div data-aos="zoom-in">
			<h1><strong>nos</strong> réalisations</h1>
		</div>
	</section>

	<section class="blanc rubrique">
		<p>Fort de nos nombreuses années d’expérience, nous avons réalisé des projets variés dans le secteur de l'événementiel, répondant aux besoins spécifiques de chaque client.</p>
	</section>

	<section class="noir rubrique">


		<ul class="menucatalogue">
			<li id="all" class="actif"><a>Afficher tout</a></li>
			<li id="eclairage"><a>Stands</a></li>
			<li id="sonorisation"><a>Événements d'entreprise</a></li>
			<li id="video"><a>Événements presse</a></li>
		</ul>

		<div class="grid-realisations">
			<?php 
			$realisations = $bdd->query('SELECT * FROM realisations ORDER BY id DESC');
			foreach ($realisations as $image) {  ?>

				<div class="grid-realisations-element element-item <?php echo $image['categorie']?>">
					<a href="fiche-realisation.php?id=<?= $image['id']; ?>" style="width: 100%; height: 100%;">
						<div class="bgn">
							<img src="<?php echo $image['image']; ?>" alt="Produit">
						</div>
						<div class="nom-element bgn">
							<h3><?php echo $image['titre']; ?></h3>	
						</div>
					</a>
				</div>

			<?php } ?>
		</div>

	</section>

	<footer>
		<?php include("footer.php");?>
	</footer>

	<style>
		html {
			scroll-behavior: smooth;
		}
		#haut {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 25;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 15px;


			padding:0.8em;
			font-size:1em;
			font-family: 'Roboto', sans-serif;
			border-radius: 2em;
			background: #DF2A16;
			color: white;  
		}


	</style>

	<div>
		<button onclick="retourHaut()" id="haut" title="Retour haut de page">
			<svg width="1.2rem" height="1.2rem" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
				<path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
			</svg>
		</button>
	</div>

	<script>
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) 
			{
				document.getElementById("haut").style.display = "block";
			} 
			else 
			{
				document.getElementById("haut").style.display = "none";
			}
		}

		function retourHaut() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		} 
	</script>


	<script src="./lib/catalogue.js"></script>
	<script src="./lib/aos-master/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<style type="text/css">

		.actif {
			display: flex;
			justify-content: center;
		}

		.actif > a::after {
			display: flex;
			content:"";
			width:100%;
			height:3px;
			background:#DF2A16;
		}
		
		.menucatalogue {
			display: flex;
			justify-content: center;
			padding-bottom: 2em;
		}

		.menucatalogue > li {
			cursor: pointer;
			font-weight: bolder;
			padding-right: 1em;
			padding-left: 1em;
		}

		@media screen and (max-width:840px) {

			.menucatalogue {
				flex-direction: column;
			}
		}

	</style>
	<script src="./lib/nav.js"></script>
</body>

</html>