<?php
session_start();
if(!$_SESSION['mdp']){
	header('Location: connexion.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8WRHJSJ');</script>
<!-- End Google Tag Manager -->
	<link href="./css/main.css" rel="stylesheet">


	<!--Animate on scroll bank-->
	<link href="./lib/aos-master/dist/aos.css" rel="stylesheet">


	<!--Caroussel-->
	<link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick-theme.css"/>



	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Techn'up - Espace Administrateur</title>
	<meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
	<link rel="icon" type="image/png" href="img/favicon.webp">



</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8WRHJSJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<?php include("nav-admin.php");?>
	</header>

	<section class="menu">
		<div class="grid-admin">
			<div class="lien">
				<a href="publier-realisation.php">
					<p>Ajouter une réalisation</p>
				</a>
			</div>
			<div class="lien">
				<a href="publier-produit.php">
					<p>Ajouter un produit au catalogue</p>
				</a>
			</div>
		</div>
	</section>

	<footer>
		<?php include("./footer.php");?>
	</footer>




	<script src="./lib/aos-master/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>




	<style type="text/css">

		.menu {
			padding: 2rem;
		}

		.grid-admin {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-column-gap: 2rem;
			grid-row-gap: 2rem;
		}

		.lien {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 45vh;
			background-color: #E22A15;
			color: white;
			font-weight: bold;
			font-size: 2rem;
			transition: all .2s ease;
			border-radius: 2rem;
		}

		.lien > a {
			width: 100%;
			padding: 2rem;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		@media (max-width: 992px) {

			.grid-admin {
				display: grid;
				grid-template-columns: 1fr;
				grid-column-gap: 2rem;
				grid-row-gap: 2rem;
			}

		}




	</style>

		<script type="text/javascript">
  const liens = document.querySelectorAll('.lien');

  liens.forEach( (button) => {
  	button.addEventListener('mouseover', () => {
  		button.style.transform = 'scale(0.99)'
  	})
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })

  liens.forEach( (button) => {
    button.addEventListener('mouseover', () => {
      button.style.transform = 'scale(0.99)'
    })
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })
	</script>

</body>

</html>