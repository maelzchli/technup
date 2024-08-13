<?php

echo "Test 1 réussi";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

header('Content-Type: text/html; charset=utf-8');

echo "Test 2 réussi";
if (isset($_POST['envoyer'])) {
    echo "Test 3 réussi";
    // Validation des données du formulaire
    $prenom = htmlspecialchars(trim($_POST['prenom']), ENT_QUOTES, 'UTF-8');
    $nom = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES, 'UTF-8');
    $objet = htmlspecialchars(trim($_POST['objet']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');


    // Validation des données
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<p>Adresse email invalide</p>';
    } elseif (!preg_match('/^[0-9+\- ]+$/', $telephone)) {
        echo '<p>Numéro de téléphone invalide</p>';
    } elseif (empty($prenom) || empty($nom) || empty($message)) {
        echo '<p>Certains champs sont vides</p>';
    } elseif (strlen($message) < 10) {
        echo '<p>Le message doit contenir au moins 10 caractères</p>';
    } else {
        echo "Test 4 réussi";
        // Création d'une instance de PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host       = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['EMAIL_USER'];
            $mail->Password   = $_ENV['EMAIL_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = $_ENV['SMTP_PORT'];
            echo "Test 5 réussi";

            // Destinataires
            $mail->setFrom($email, "$prenom $nom");
            $mail->addAddress($_ENV['EMAIL_USER']);
            $mail->addReplyTo($email, "$prenom $nom");
            echo "Test 6 réussi";

            // Contenu de l'email
            $mail->isHTML(true);
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
} else {
    echo "Le formulaire n'a pas été soumis";
}
?>
