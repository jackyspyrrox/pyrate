<?
// Control of sessions bro <3
if (session_status() == PHP_SESSION_NONE) {
    // If not start : Starting
    session_start();
}

$adresseIP = $_SERVER['REMOTE_ADDR'];   // Récupération IP Client
$url = "http://ip-api.com/json/{$adresseIP}";
$donneesJson = file_get_contents($url);
$donnees = json_decode($donneesJson, true);


if ($donnees['status'] == 'success') { 
    //Récupération de toutes les données sur l'ip client
   
    $_SESSION['pays'] = $donnees['country'];
    $_SESSION['region'] = $donnees['regionName'];
    $_SESSION['ville'] = $donnees['city'];
    $_SESSION['code_postal'] = $donnees['zip'];
    $_SESSION['latitude'] = $donnees['lat'];
    $_SESSION['longitude'] = $donnees['lon'];
    $_SESSION['timezone'] = $donnees['timezone'];
    $_SESSION['isp'] = $donnees['isp'];
    $_SESSION['org'] = $donnees['org'];
    $_SESSION['as'] = $donnees['as'];
    $_SESSION['adresse_ip'] = $donnees['query'];


   
} else {
    
    echo "Error API API-IP veuillez acheter la version PRO.";
}



?>