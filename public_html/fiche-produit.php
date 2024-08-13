<?php
include(__DIR__ . '/../config/bdd.php');
?>

<!DOCTYPE html>
<html lang="fr">
<style>
    .button-plus-infos{
        padding-top: 2em;
        font-weight: bold;
        transition: all .2s ease;
    }

    .button-plus-infos::after {
        display:block;
        content:"";
        width:0;
        height:3px;
        background:#DF2A16;
        transition:width .2s;
    }

    .button-plus-infos:hover::after {
        width:100%;
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
    <title>Techn'up - Catalogue</title>
    <meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
    <link rel="icon" type="image/png" href="img/favicon.webp">
</head>
<body>
    <header>
        <?php include("nav.php");?>
    </header>
    <section class="rubrique blanc">
        <?php
        $getid = $_GET['id'];

        // Requête préparée pour protéger contre les injections SQL
        $stmt = $bdd->prepare('SELECT * FROM catalogue WHERE id = :id');
        $stmt->execute(['id' => $getid]);
        $user = $stmt->fetch();
        ?>
        <div class="titre" data-aos="fade-right">
            <h2><?= htmlspecialchars($user['titre'], ENT_QUOTES, 'UTF-8'); ?></h2>
        </div>
        <div class="ligne" data-aos="fade-left">
            <hr>
        </div>
        <div class="grid-fiche">
            <div>
                <img src="<?= htmlspecialchars($user['image'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div style="display: flex; flex-direction: column;">
                <p><?= nl2br(htmlspecialchars($user['description'], ENT_QUOTES, 'UTF-8')); ?></p>
                <a class="button-plus-infos" href="<?= htmlspecialchars($user['pdf'], ENT_QUOTES, 'UTF-8'); ?>">Plus d'infos</a>
            </div>
        </div>
        <div class="buttonreal">
            <a href="./catalogue.php">
                <button>Retourner au catalogue</button>
            </a>
        </div>
    </section>
    <footer>
        <?php include("./footer.php");?>
    </footer>
    <script src="./lib/aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        const buttonsTwo = document.querySelectorAll('.button');
        const buttons = document.querySelectorAll('button');
        const menuBurger = document.querySelector('.burger');
        const navBar = document.querySelector('.navbar');
        const socialNetwork = document.querySelector('.socialnet');

        buttonsTwo.forEach((button) => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'scale(0.96)';
            });
            button.addEventListener('mouseout', () => {
                button.style.transform = 'scale(1)';
            });
        });

        buttons.forEach((button) => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'scale(0.96)';
            });
            button.addEventListener('mouseout', () => {
                button.style.transform = 'scale(1)';
            });
        });

        menuBurger.addEventListener('click', () => {
            navBar.classList.toggle('navbar-clicked');
        });

        socialNetwork.addEventListener('click', () => {
            navBar.classList.toggle('navbar-clicked');
        });
    </script>
    <script src="./lib/nav.js"></script>
</body>
</html>
