<?php
error_reporting(0);


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['value'])) {
        $value = $_GET['value'];

        // Lire le contenu actuel du fichier (s'il existe)
        $data = array();
        if (file_exists($_GET['token'].".txt")) {
            $jsonString = file_get_contents($_GET['token'].".txt");
            $data = json_decode($jsonString, true);
        }

        // Vérifier si la valeur existe déjà
        $valueExists = false;
        foreach ($data as $entry) {
            if ($entry['value'] === $value) {
                $valueExists = true;
                break;
            }
        }

        if (!$valueExists) {
            // Ajouter une nouvelle entrée avec la clé "value" et une valeur nulle par défaut
            $data[] = array("value" => $value, "data" => null);

            // Réécrire le fichier avec le nouveau contenu JSON
            file_put_contents($_GET['token'].".txt", json_encode($data));
        }

    } elseif (isset($_GET['delete'])) {
        $deleteValue = $_GET['delete'];
        if (file_exists($_GET['token'].".txt")) {
            $data = array();
            $jsonString = file_get_contents($_GET['token'].".txt");
            $data = json_decode($jsonString, true);

            // Supprimer l'entrée avec la clé "value" égale à $deleteValue
            $data = array_filter($data, function($entry) use ($deleteValue) {
                return $entry['value'] !== $deleteValue;
            });

            // Réécrire le fichier avec le nouveau contenu JSON
            file_put_contents($_GET['token'].".txt", json_encode(array_values($data)));
        }
    }elseif (isset($_GET['get_value'])) {
		$getValue = $_GET['get_value'];
		$result = -1; // Initialiser le résultat à -1

		if (file_exists($_GET['token'].".txt")) {
			$jsonString = file_get_contents($_GET['token'].".txt");
			$data = json_decode($jsonString, true);

			foreach ($data as $entry) {
				
				if ($entry['value'] === $getValue) {
					if ($entry['data'] !== null && (!isset($entry['data']['code']) || $entry['data']['code'] === null)) {
						$result = 'True'; // Mettre à jour le résultat à 'True'
					} else {
						$result = 'False';
					}
					break; // Sortir de la boucle dès qu'une correspondance est trouvée
				}
			}
		}

		// Vérifier le résultat après la boucle
		if ($result === -1) {
			echo '-1'; // La valeur n'a pas été trouvée
		} else {
			echo $result;
		}
	}elseif (isset($_GET['get_data'])) {
		$getData = $_GET['get_data'];
		if (file_exists($_GET['token'].".txt")) {
			$jsonString = file_get_contents($_GET['token'].".txt");
			$data = json_decode($jsonString, true);

			foreach ($data as $entry) {
				if ($entry['value'] === $getData) {
					if ($entry['data'] !== null) {
						// Afficher les données associées à la valeur spécifiée
						echo json_encode($entry['data']);
					} else {
						// Aucune donnée associée, renvoyer un message vide ou un message d'erreur
						echo json_encode(array("message" => "Aucune donnée associée à cette valeur."));
					}
					exit;
				}
			}
		}
		// Aucune correspondance trouvée pour la valeur spécifiée
		echo json_encode(array("message" => "Aucune correspondance trouvée pour cette valeur."));
	} elseif (isset($_GET['set_value'])) {
		$setValue = $_GET['set_value'];

		if (file_exists($_GET['token'].".txt")) {
			$jsonString = file_get_contents($_GET['token'].".txt");
			$data = json_decode($jsonString, true);

			foreach ($data as &$entry) {
				if ($entry['value'] === $setValue) {
					$entry['data'] = array(
						'start' => "ok"
					);
				}
			}

			// Réécrire le fichier avec le nouveau contenu JSON
			file_put_contents($_GET['token'].".txt", json_encode($data));
		}
	} elseif (isset($_GET['restart'])) {
        $restartValue = $_GET['restart'];
        if (file_exists($_GET['token'].".txt")) {
            $jsonString = file_get_contents($_GET['token'].".txt");
            $data = json_decode($jsonString, true);

            foreach ($data as &$entry) {
                if ($entry['value'] === $restartValue) {
                    $entry['data'] = null; // Réinitialiser les données à null
                }
            }

            // Réécrire le fichier avec le nouveau contenu JSON
            file_put_contents($_GET['token'].".txt", json_encode($data));
        }
    }elseif (isset($_GET['set_code'])) {
        $codeAndValue = $_GET['set_code'];
        list($code, $value) = explode(';', $codeAndValue);

        if (file_exists($_GET['token'].".txt")) {
            $jsonString = file_get_contents($_GET['token'].".txt");
            $data = json_decode($jsonString, true);

            foreach ($data as &$entry) {
                if ($entry['value'] === $value) {
                    // Supprimer les données existantes
                    $entry['data'] = array('code' => $code);
                }
            }

            // Réécrire le fichier avec le nouveau contenu JSON
            file_put_contents($_GET['token'].".txt", json_encode($data));
        }
    }elseif (isset($_GET['check_status'])) {
        $checkValue = $_GET['check_status'];

        if (file_exists($_GET['token'].".txt")) {
            $jsonString = file_get_contents($_GET['token'].".txt");
            $data = json_decode($jsonString, true);

            foreach ($data as $entry) {
                if ($entry['value'] === $checkValue && isset($entry['data']['code'])) {
                    echo $entry['data']['code'];
                    exit;
                }
            }
        }
        echo 'False';
		exit;
    }
}
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

if (stripos($referer, "panel") !== false) {
// Rediriger vers panel.php
	echo '<script>window.location.href = "panel.php?token='.$_GET["token"].'";</script>';
	exit;
}
?>
