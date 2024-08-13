<?php
// Dossier où se trouvent les fichiers
$directory = 'dossier-rcfg/';

if (isset($_GET['file'])) {
    $file = basename($_GET['file']);
    $filepath = $directory . $file;

    // Vérifier si le fichier existe
    if (file_exists($filepath)) {
        // En-têtes pour forcer le téléchargement
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "Le fichier n'existe pas.";
    }
} else {
    echo "Aucun fichier spécifié.";
}
?>
