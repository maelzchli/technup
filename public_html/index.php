<?php
include(__DIR__ . '/../config/bdd.php');
?>



<!DOCTYPE html>

<html lang="fr">

<style type="text/css">


	#background-video {
		height: 100vh;
		width: 100vw;
		object-fit: cover;
		background-size: cover;
		position: fixed;
		left: 0;
		right: 0;
		bottom: 0;
		z-index: -2;
	}

	@media (max-width: 768px) {

		#background-video {
			display: none;
		}

		body:after{
			content:"";
			position:fixed;
			top:0;
			height:100vh;
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
		<title>Techn'up - Prestation, intégration, location et vente de matériel audiovisuel</title>
		<meta name="description" content="Au service de professionnels et particuliers, nous vous proposons la solution audiovisuelle et technique adaptée à votre projet. Grâce à notre parc matériel de 3 000 m² à la pointe de la technologie et à nos ateliers de serrurerie et menuiserie, nous faisons du sur-mesure pour répondre au mieux à vos demandes.">
		<meta name="keywords" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
		<link rel="icon" type="image/png" href="img/favicon.webp">


		<script src="./lib/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		
		<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/b6f8a7659a2123b759a294777/239290aa04ef705109968c50b.js");</script>

	</head>

	<body>
		<?php include("loader.php")?>

		<video id="background-video" autoplay loop muted>

			<source src="./img/bg.mp4" type="video/mp4">

			</video>


			<header>
				<?php include("nav.php");?>
			</header>
			<section class="accueil">
				<div data-aos="zoom-in">
					<h1>techn'<strong>up</strong></h1>
				</div>
				<p data-aos="zoom-in">Prestation, intégration, location et vente de matériel audiovisuel</p>
			</section>

			<section class="blanc rubrique">
				<p>Au service des professionnels et particuliers,  nous proposons des solutions audiovisuelles et techniques pour des événements et des intégrations.</p>
				<p>Le son, l’éclairage et la vidéo pour vos showrooms, conférences, conventions, forums ou soirées sont notre spécialité.</p>
			</section>

			<section class="noir rubrique">
				<div class="titre" data-aos="fade-right">
					<h2>A propos</h2>
				</div>
				<div class="ligne" data-aos="fade-left">
					<hr>
				</div>
				<div class="grid">
					<div class="grid-item1">
						<p>Créée en 1986 par Jean-Paul Lenglet, Techn’up est née d’une passion à trouver des solutions techniques liées aux exigences des métiers du son, de l’éclairage, de la vidéo et de la distribution électrique. Nous avons su nous entourer d’équipes techniques compétentes pour mener à bien les projets qui nous sont confiés. Notre Société s’est développée pour devenir partenaire de nombreuses Agences de Communication issues du milieu de l’événementiel (Novateam, Remark, Team Work, Groupe Nicaro et bien d’autres).</p>
					</div>			
					<div class="grid-item2">
						<img src="./img/lumiere.webp" alt="Projecteurs">	
					</div>
					<div class="grid-item3">
						<img src="./img/mix.webp" alt="Projecteurs">	
					</div>
					<div class="grid-item4">
						<p>Fort de plus de 30 ans d’expérience dans la prestation audiovisuelle, nous avons réalisé de nombreux projets en France et à l’international au service d'entreprises comme Peugeot, Engie ou la Commission Européenne. Nous mettons à profit notre expertise et notre professionnalisme pour vous proposer la solution qui correspond le mieux à votre projet. Réactifs et soucieux de nos clients, nous saurons répondre à vos besoins en alliant passion et technologie.</p>
					</div>
				</div>
			</section>

			<section class="rubrique blanc" id="infoplus">
				<div class="infoplus">
					<div>
						<p>Plus de</p>	
						<h5><strong data-purecounter-start="0"
							data-purecounter-end="30" data-purecounter-duration="0.75"
							class="purecounter">30</strong> ans</h5>	
							<p>d'expérience</p>	
						</div>
						<div>
							<p>Plus de</p>	
							<h5><strong data-purecounter-start="0"
								data-purecounter-end="3000" data-purecounter-duration="0.75"
								class="purecounter">3 000</strong> m²</h5>
								<p>de parc matériel</p>
							</div>
							<div>
								<p>Plus de</p>	
								<h5><strong data-purecounter-start="0"
									data-purecounter-end="30" data-purecounter-duration="0.75"
									class="purecounter">30</strong> pays</h5>	
									<p>où nous sommes intervenus</p>	
								</div>
							</div>
						</section>

						<section class="rubrique noir" id="realisation">
							<div class="titre" data-aos="fade-right">
								<h2>Réalisations</h2>
							</div>
							<div class="ligne" data-aos="fade-left">
								<hr>
							</div>
							<div class="grid-realisations">
								<?php 
							$realisationsaccueil = $bdd->query('SELECT * FROM realisations ORDER BY id DESC LIMIT 4');
							foreach ($realisationsaccueil as $image) {  
 							   $imageSrc = htmlspecialchars($image['image']);
 							   $titre = htmlspecialchars($image['titre']);
								?>

    						<div class="grid-realisations-element">
      						  <a href="fiche-realisationsaccueil.php?id=<?= $image['id']; ?>">
         					   <div class="bgn">
         				    	   <img src="<?= $imageSrc; ?>" alt="Réalisations">
         					   </div>
          					  <div class="nom-element bgn">
           					     <h3><?= $titre; ?></h3>	
       					     </div>
 						     </a>
 							  </div>

							<?php } ?>

							</div>
							<div class="buttonreal">
								<a href="./realisation.php">
									<button>Voir toutes nos réalisations</button>
								</a>
							</div>
						</section>

						<section class="rubrique blanc">
							<div class="titre" data-aos="fade-right">
								<h2>Nous travaillons sur leurs événements</h2>
							</div>
							<div class="ligne" data-aos="fade-left">
								<hr>
							</div>
							<div class="grid-realisations">
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/peugeot.webp" alt="Logo Peugeot">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/engie.webp" alt="Logo Engie">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/groupama.webp" alt="Logo Groupama">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/esa.webp" alt="Logo Agence Spatiale Européenne">										
									</div>
								</div>
							</div>
						</section>

						<section class="rubrique bleu" id="nouveautes">
							<div class="titre" data-aos="fade-right">
								<h2>Nouveautés</h2>
							</div>
							<div class="ligne" data-aos="fade-left">
								<hr>
							</div>
							<div class="grid-realisations caroussel">
<?php 
$nouveautes = $bdd->query('SELECT * FROM catalogue ORDER BY id DESC LIMIT 5');
foreach ($nouveautes as $image) {  
    $imageSrc = htmlspecialchars($image['image']);
    $titre = htmlspecialchars($image['titre']);
?>

    <div class="grid-realisations-element caroussel-element">
        <a href="fiche-nouveautes.php?id=<?= $image['id']; ?>">
            <div class="bgn">
                <img src="<?= $imageSrc; ?>" alt="Nouveau produit">
            </div>
            <div class="nom-element bgb">
                <h3><?= $titre; ?></h3>	
            </div>
        </a>
    </div>

<?php } ?>

							</div>
							<div class="buttonreal">
								<a href="./catalogue.php">
									<button>Voir notre catalogue</button>
								</a>
							</div>
						</section>

						<section class="rubrique blanc">
							<div class="titre" data-aos="fade-right">
								<h2>Ils nous font confiance</h2>
							</div>
							<div class="ligne" data-aos="fade-left">
								<hr>
							</div>
							<div class="grid-realisations">
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/wmhproject.webp" alt="Logo Peugeot">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/novateam.webp" alt="Logo Engie">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/mythologies.webp" alt="Logo Groupama">
									</div>
								</div>
								<div class="grid-realisations-element confiance">
									<div>
										<img src="./img/events2event.webp" alt="Logo Groupama">
									</div>
								</div>
							</div>
						</section>

						<section class="rubrique noir">
							<div class="titre" data-aos="fade-right">
								<h2>S'inscrire à notre newsletter</h2>
							</div>
							<div class="ligne" data-aos="fade-left">
								<hr>
							</div>
							<div class="formulaire">

								<style type="text/css">


									.button {
										display:flex;
										justify-content: center;
										padding:0.8em;
										font-size:1em;
										font-family: 'Roboto', sans-serif;
										border: none;
										border-radius: 2em;
										background: #DF2A16;
										color: white;  
										transition: all .2s ease;
									}


									form {
										box-sizing: border-box;
										width: 100%;
										text-align: left;
									}

									form :nth-child(2) {
										display: flex;
										justify-content: center;
									}

									.place-label { 
										position:relative; 
										margin-bottom:20px;
										margin-top:30px;
										padding-bottom: 2rem;
									}

									.cont {
										font-size:14px;
										padding:10px 4px;
										display:block;
										width:100%;
										height:30px;
										background-color: transparent;
										border:none;
										border-bottom:2px solid #fff;
										resize: vertical;
										color: #fff;

									}

									input:focus, 
									textarea:focus {
										outline:none;
										border-bottom:3px solid #DF2A16;
									}

									input:focus ~ label, input:not(:placeholder-shown) ~ label,
									textarea:focus ~ label, textarea:not(:placeholder-shown) ~ label  {
										top:-15px;
										font-size:10px;
										color: #fff;
									}

									label {
										color: #fff; 
										font-size:1.2em;
										font-weight:normal;
										position:absolute;
										pointer-events:none;
										left:5px;
										top:5px;
										bottom: 5px;
										transition:0.2s ease all; 
										-moz-transition:0.2s ease all; 
										-webkit-transition:0.2s ease all;
									}

</style>

<?php include("newsletter.php") ?>



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




<script src="./lib/aos-master/dist/aos.js"></script>
<script>
	AOS.init();
</script>

<script src="./lib/purecounter_vanilla.js"></script>
<script>
	new PureCounter();
</script>
<script src="./lib/nav.js"></script>
<script type="text/javascript" src="./lib/slick/slick/slick.min.js"></script>
<script src="./lib/main.js"></script>

</body>

</html>