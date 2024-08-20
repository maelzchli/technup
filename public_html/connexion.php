<?php 

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

session_start();

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();


if(isset($_POST['valider'])){
    if(!empty($_POST['identifiant']) AND !empty($_POST['mdp'])){
        $identifiant_par_defaut = $_ENV['USER_ADMIN'];
        $mdp_hache_par_defaut = $_ENV['PASSWORD_ADMIN'];
        $identifiant_saisi = htmlspecialchars($_POST['identifiant']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($identifiant_saisi == $identifiant_par_defaut && password_verify($mdp_saisi, $mdp_hache_par_defaut)){
            $_SESSION['mdp'] = $mdp_hache_par_defaut;
            header('Location: espaceadmin.php');
        } else {
            echo "L'identifiant ou le mot de passe est incorrect";
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link href="./css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Techn'up - Espace de connexion administrateur</title>
    <meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
    <link rel="icon" type="image/png" href="./img/favicon.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="conteneur">
        <div id="mc_embed_signup">
            <form method="POST" action="" align="center">
                <div>
                    <div class="place-label">
                        <input type="text" class="cont" name="identifiant" placeholder=" " autocomplete="off" required>
                        <span></span>
                        <label>Identifiant</label>
                    </div>
                    <div class="place-label">
                        <input type="password" class="cont" name="mdp" placeholder=" " required>
                        <span></span>
                        <label>Mot de passe</label>
                    </div>
                </div>
                <div class="envoyer">
                    <button id="button" type="submit" name="valider">Se connecter</button>
                </div>
            </form>
        </div>
    </section>
</body>

<style type="text/css">

    .conteneur {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
    }

    #mc_embed_signup{
        clear:left; 
        font:16px 'roboto',sans-serif;
        width: 30%;
    }

    form {
        box-sizing: border-box;
        width: 100%;
    }

    form :nth-child(2) {
        display: flex;
        justify-content: center;
    }

    .place-label { 
        position:relative; 
        margin-bottom:20px;
        margin-top:30px;
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
        border-bottom:3px solid #E63323;
    }

    input:focus ~ label, input:not(:placeholder-shown) ~ label,
    textarea:focus ~ label, textarea:not(:placeholder-shown) ~ label  {
        top:-15px;
        font-size:10px;
        color: #232323;;
    }

    label {
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
</style>

<script type="text/javascript">
    const buttonsTwo = document.querySelectorAll('.button');
    const buttons = document.querySelectorAll('button');

    buttonsTwo.forEach((button) => {
        button.addEventListener('mouseover', () => {
            button.style.transform = 'scale(1.05)'
        });
        button.addEventListener('mouseout', () => {
            button.style.transform = 'scale(1)'
        });
    });

    buttons.forEach((button) => {
        button.addEventListener('mouseover', () => {
            button.style.transform = 'scale(1.05)'
        });
        button.addEventListener('mouseout', () => {
            button.style.transform = 'scale(1)'
        });
    });
</script>
</html>
