<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="meta" content="agence, audiovisuel, ardeche, evenementiel, sonorisation, evenement, eclairage, video, communication">
    <title>Techn'up - Contact</title>
    <link href="./css/main.css" rel="stylesheet">
    <link href="./lib/aos-master/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./lib/slick/slick/slick-theme.css" async/>
    <link rel="icon" type="image/png" href="img/favicon.webp">
    <style type="text/css">
        body:after {
            content: "";
            position: fixed;
            top: 0;
            height: 50vh;
            left: 0;
            right: 0;
            z-index: -50;
            background: url("./img/background.webp") center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .buttoncenter {
            display: flex;
            justify-content: center;
            align-items: center;
        }



        iframe {
            height: 50%;
            width: 100%;
            padding-bottom: 2rem;
        }
        .contact {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 8rem;
            padding-left: 15%;
            padding-right: 15%;
            padding-top: 8rem;
            padding-bottom: 8rem;
            background-color: #fff;
            color: #232323;
        }
        .grid-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 8rem;
            grid-row-gap: 2rem;
            grid-template-areas:
                'a b'
                'c d'
                'e e'
                'f f';
        }
        .element1 { grid-area: a; }
        .element2 { grid-area: b; }
        .element3 { grid-area: c; }
        .element4 { grid-area: d; }
        .element5 { grid-area: e; }
        .element6 { grid-area: f; }
        form {
            box-sizing: border-box;
        }
        .place-label { 
            position: relative; 
            margin-bottom: 20px;
            margin-top: 30px;
        }
        .cont {
            font-size: 14px;
            padding: 10px 4px;
            display: block;
            width: 100%;
            height: 30px;
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #232323;
            resize: vertical;
        }
        input:focus, 
        textarea:focus {
            outline: none;
            border-bottom: 3px solid #DF2A16;
        }
        input:focus ~ label, 
        input:not(:placeholder-shown) ~ label,
        textarea:focus ~ label, 
        textarea:not(:placeholder-shown) ~ label {
            top: -15px;
            font-size: 10px;
            color: #232323;
        }
        label {
            color: black; 
            font-size: 1em;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 5px;
            bottom: 5px;
            transition: 0.2s ease all; 
            -moz-transition: 0.2s ease all; 
            -webkit-transition: 0.2s ease all;
        }
        @media (max-width: 1400px) {
            .contact {
                display: grid;
                grid-template-columns: 1fr;
                grid-row-gap: 2rem;
            }
            .grid-form {
                display: grid;
                grid-template-columns: 1fr;
                grid-column-gap: 8rem;
                grid-row-gap: 2rem;
                grid-template-areas: 
                    'a'
                    'b'
                    'c'
                    'd'
                    'e'
                    'f';
            }
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
            padding: 0.8em;
            font-size: 1em;
            font-family: 'Roboto', sans-serif;
            border-radius: 2em;
            background: #DF2A16;
            color: white;  
        }
    </style>
</head>

<body>
    <header>
        <?php include("nav.php"); ?>
    </header>
    <section class="entete">
        <div data-aos="zoom-in">
            <h1><strong>nous</strong> contacter</h1>
        </div>
    </section>
    <section class="contact">
        <form method="post">
            <div class="grid-form">
                <div class="place-label element1">
                    <input class="cont" type="text" placeholder=" " name="prenom" required> 
                    <span></span>
                    <label for="prenom">Prénom</label>
                </div>
                <div class="place-label element2">
                    <input class="cont" type="text" placeholder=" " name="nom" required> 
                    <span></span>
                    <label for="nom">Nom</label>
                </div>
                <div class="place-label element3">
                    <input class="cont" type="email" placeholder=" " name="email" required> 
                    <span></span>
                    <label for="email">Adresse email</label>
                </div>
                <div class="place-label element4">
                    <input class="cont" type="text" placeholder=" " name="telephone" required> 
                    <span></span>
                    <label for="telephone">Téléphone</label>
                </div>
                <div class="place-label element5">
                    <input class="cont" type="text" placeholder=" " name="objet" required> 
                    <span></span>
                    <label for="objet">Objet</label>
                </div>
                <div class="place-label element6">
                    <textarea class="cont" placeholder=" " name="message" required></textarea>
                    <span></span>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="buttoncenter">
                <div class="envoyer">
                    <button id="button" type="submit" name="envoyer">Envoyer</button>
                </div>
            </div>
        </form>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.405596777113!2d2.287365915877613!3d48.6977281199592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e677df969de481%3A0x88c13a4d5ac8f7e7!2sLe%20Parc%20de%20l&#39;%C3%89v%C3%A9nement!5e0!3m2!1sfr!2sfr!4v1650614157190!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2850.1396107944793!2d4.291095076585826!3d44.40978080316975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4fbc1c08a3f07%3A0xdd372e83cb4938c3!2s123%20Rte%20de%20Saint-Alban%2C%2007120%20Grospierres!5e0!3m2!1sfr!2sfr!4v1683709844533!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['envoyer'])) {
    $prenom = htmlspecialchars(trim($_POST['prenom']), ENT_QUOTES, 'UTF-8');
    $nom = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES, 'UTF-8');
    $objet = htmlspecialchars(trim($_POST['objet']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
    $email_to = 'info@techn-up.fr';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<p>Adresse email invalide</p>';
    } elseif (!preg_match('/^[0-9+\- ]+$/', $telephone)) {
        echo '<p>Numéro de téléphone invalide</p>';
    } elseif (empty($prenom) || empty($nom) || empty($message)) {
        echo '<p>Certains champs sont vides</p>';
    } elseif (strlen($message) < 10) {
        echo '<p>Le message doit contenir au moins 10 caractères</p>';
    } else {

        $mail = new PHPMailer(true);

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host       = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['EMAIL_USER'];
            $mail->Password   = $_ENV['EMAIL_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = $_ENV['SMTP_PORT'];

            $mail->setFrom($_ENV['EMAIL_USER'], "$prenom $nom");
            $mail->addAddress($_ENV['EMAIL_USER']);
            $mail->addReplyTo($email, "$prenom $nom");

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $objet;
            $mail->Body    = "Ce message a été envoyé depuis le site internet.<br>" .
                             "Prénom : " . htmlspecialchars($prenom) . "<br>" .
                             "Nom : " . htmlspecialchars($nom) . "<br>" .
                             "Email : " . htmlspecialchars($email) . "<br>" .
                             "Téléphone : " . htmlspecialchars($telephone) . "<br>" .
                             "Objet : " . htmlspecialchars($objet) . "<br>" .
                             "Message : <br><br>" . nl2br(htmlspecialchars($message));
            $mail->AltBody = "Ce message a été envoyé depuis le site internet.\n" .
                             "Prénom : " . htmlspecialchars($prenom) . "\n" .
                             "Nom : " . htmlspecialchars($nom) . "\n" .
                             "Email : " . htmlspecialchars($email) . "\n" .
                             "Téléphone : " . htmlspecialchars($telephone) . "\n" .
                             "Objet : " . htmlspecialchars($objet) . "\n" .
                             "Message : \n\n" . htmlspecialchars($message);

            $mail->send();
                echo '<p>Votre message a été envoyé.</p>';
                } catch (Exception $e) {
                echo "<p>Le message n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}</p>";
                }

    }
}
?>


    </section>
    <footer>
        <?php include("footer.php"); ?>
    </footer>

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
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("haut").style.display = "block";
            } else {
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
    <script>
        const buttonsTwo = document.querySelectorAll('.button');
        const buttons = document.querySelectorAll('button');
        const menuBurger = document.querySelector('.burger');
        const navBar = document.querySelector('.navbar');
        const socialNetwork = document.querySelector('.socialnet');

        buttonsTwo.forEach(button => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'scale(0.96)'
            });
            button.addEventListener('mouseout', () => {
                button.style.transform = 'scale(1)'
            });
        });

        buttons.forEach(button => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'scale(0.96)'
            });
            button.addEventListener('mouseout', () => {
                button.style.transform = 'scale(1)'
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
