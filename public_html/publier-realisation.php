<?php
session_start();
include(__DIR__ . '/../config/bdd.php');

// Vérification de l'authentification
if (!isset($_SESSION['mdp']) || !$_SESSION['mdp']) {
    header('Location: connexion.php');
    exit; // Arrête l'exécution du script après la redirection
}

// Traitement du formulaire d'ajout de réalisation
if (isset($_POST['envoyer'])) {
    // Vérification et traitement des fichiers uploadés (image)
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imgName = $_FILES['image']['name'];
        $imgTmpName = $_FILES['image']['tmp_name'];
        $imgSize = $_FILES['image']['size'];
        $imgType = $_FILES['image']['type'];

        // Vérification du type de fichier
        $allowedTypes = ['image/png', 'image/jpeg'];
        if (!in_array($imgType, $allowedTypes)) {
            echo "Seuls les fichiers PNG et JPEG sont autorisés.";
            exit;
        }

        // Emplacement où le fichier sera stocké
        $imgPath = './img/' . basename($imgName);

        // Déplacement du fichier téléchargé
        if (!move_uploaded_file($imgTmpName, $imgPath)) {
            echo "Erreur lors du téléchargement de l'image.";
            exit;
        }
    } else {
        echo "Veuillez choisir une image.";
        exit;
    }

    // Données à insérer dans la base de données
    $data = [
        'titre' => htmlspecialchars($_POST['titre']),
        'description' => nl2br(htmlspecialchars($_POST['description'])),
        'image' => $imgPath, // Chemin de l'image sauvegardé
        'categorie' => $_POST['categorie']
    ];

    // Préparation et exécution de la requête SQL sécurisée
    $envoyer = $bdd->prepare('INSERT INTO realisations (titre, description, image, categorie) VALUES (:titre, :description, :image, :categorie)');
    $envoyer->execute($data);
}

// Récupération des données existantes dans les réalisations
$getDataImages = $bdd->prepare('SELECT * FROM realisations ORDER BY id DESC');
$getDataImages->execute();
$realisations = $getDataImages->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./css/main.css" rel="stylesheet">
    <link href="./lib/aos-master/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick-theme.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Techn'up - Publier une réalisation</title>
    <meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
    <link rel="icon" type="image/png" href="img/favicon.webp">
</head>
<body>
    <header>
        <?php include("nav-admin.php");?>
    </header>

    <section class="blanc rubrique">
        <div class="titre" data-aos="fade-right">
            <h2>Ajouter une réalisation</h2>
        </div>
        <div class="ligne" data-aos="fade-left">
            <hr>
        </div>
        <div class="formulaire">
            <div id="mc_embed_signup">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div>
                        <div class="place-label">
                            <input class="cont" type="text" placeholder=" " name="titre" required>
                            <span></span>
                            <label class="label">Titre</label>
                        </div>
                        <div class="place-label">
                            <textarea class="cont" placeholder=" " name="description" required></textarea>
                            <span></span>
                            <label class="label">Description</label>
                        </div>
                        <div class="place-label">
                            <input type="file" name="image" accept="image/png, image/jpeg" required>
                            <span></span>
                            <label class="label">Image</label>
                        </div>
                        <div class="place-radio">
                            <div>
                                <input type="radio" id="eclairage" name="categorie" value="1">
                                <label for="eclairage">Stands</label>
                            </div>
                            <div>
                                <input type="radio" id="sonorisation" name="categorie" value="2">
                                <label for="sonorisation">Événements d'entreprise</label>
                            </div>
                            <div>
                                <input type="radio" id="video" name="categorie" value="3">
                                <label for="video">Événements presse</label>
                            </div>
                        </div>
                    </div>
                    <div class="sub">
                        <div class="envoyer">
                            <button id="button" type="submit" name="envoyer">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="noir rubrique">
        <div class="titre" data-aos="fade-right">
            <h2>Réalisations</h2>
        </div>
        <div class="ligne" data-aos="fade-left">
            <hr>
        </div>

        <div class="grid-realisations">
            <?php foreach ($realisations as $image) { ?>
                <div class="grid-realisations-element">
                    <a href="fiche-realisation.php?id=<?= $image['id']; ?>">
                        <div class="bgn">
                            <img src="<?= htmlspecialchars($image['image']); ?>">
                        </div>
                        <div class="nom-element bgn">
                            <h3><?= htmlspecialchars($image['titre']); ?></h3>
                            <a href="supprimer-realisation.php?id=<?= $image['id']; ?>">
                                <button>Supprimer</button>
                            </a>
                        </div>
                    </a>
                </div>
            <?php } ?>
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

		#mc_embed_signup{
			align-items: center;
			clear:left; 
			font:16px 'roboto',sans-serif;
			width: 30%;
		}

		.formulaire {
			display: flex;
			justify-content: center;
			align-items: center;
			padding-top: 5rem;
		}

		form {
			box-sizing: border-box;
			width: 100%;
		}

		.place-label { 
			position:relative; 
			margin-bottom:20px;
			margin-top:30px;
		}

		.place-radio {
			margin-top: 30px;
			margin-bottom: 20px;
			display: flex;
			flex-direction: column;
		}

		.place-radio > div{
			display: flex;
			margin-top: 30px;
			margin-bottom: 20px;
		}

		.place-radio > div > * {
			margin-left: 5px;
			margin-right: 5px;
		}

		.sub {
			display: flex;
			justify-content: center;
		}

		.cont {
			font-size:14px;
			padding:10px 4px;
			display:block;
			width:100%;
			height:30px;
			background-color: transparent;
			border:none;
			border-bottom:2px solid #232323;
			resize: vertical;

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
			color: 	#232323;;
		}

		.label {
			color: black; 
			font-size:1em;
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


		.radio {

			display: flex;
			align-self: flex-start;

		}
    </style>

    <script type="text/javascript">
    					  const buttonsTwo = document.querySelectorAll('.button');
  const buttons = document.querySelectorAll('button');

  buttonsTwo.forEach( (button) => {
    button.addEventListener('mouseover', () => {
      button.style.transform = 'scale(0.96)'
    })
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })

  buttons.forEach( (button) => {
    button.addEventListener('mouseover', () => {
      button.style.transform = 'scale(0.96)'
    })
    button.addEventListener('mouseout', () => {
      button.style.transform = 'scale(1)'
    })
  })
    </script>
</body>
</html>