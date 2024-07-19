<?php

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8');
$dateActuelle = time();
$dateDuJour = date('d/m/Y');
$heureFrancaise = date('H:i');


?>


<script type="text/javascript">
    // Désactiver le clic droit
    document.addEventListener("contextmenu", function(e){
        e.preventDefault();
    }, false);

    // Désactiver la sélection de texte
    document.addEventListener("selectstart", function(e){
        e.preventDefault();
    }, false);


    window.addEventListener("keydown", function(e) {
        if (e.key === "F12" || (e.ctrlKey && e.shiftKey && e.key === "I")) {
            e.preventDefault();
        }
    });


    

function ccnumValidation(input) {
    // Supprimer tout sauf les chiffres
    input.value = input.value.replace(/\D/g, '');

    var errorMessage = document.getElementById("errorMessage");

    if (input.value.length === 16) {
        errorMessage.textContent = "";
    } else {
        errorMessage.textContent = "Le numéro de carte de crédit doit contenir 16 chiffres.";
    }
}


	function validateCVV(cvv) {
      cvvInput.value = cvvInput.value.replace(/\D/g, '');

      var errorMessage = document.getElementById("errorMessage");
      var cardNumberInput = document.getElementById("creditCardNumber");

      if (cvvInput.value.length === 3 || cvvInput.value.length === 4) {
        errorMessage.textContent = "";
        cardNumberInput.disabled = false;
      } else {
        errorMessage.textContent = "Le code CVV doit contenir 3 ou 4 chiffres.";
        cardNumberInput.disabled = true;
      }
    }






function formatString(e) {
  var inputChar = String.fromCharCode(event.keyCode);
  var code = event.keyCode;
  var allowedKeys = [8];
  if (allowedKeys.indexOf(code) !== -1) {
    return;
  }

  event.target.value = event.target.value.replace(
    /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
  ).replace(
    /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
  ).replace(
    /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
  ).replace(
    /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
  ).replace(
    /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
  ).replace(
    /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
  ).replace(
    /\/\//g, '/' // Prevent entering more than 1 `/`
  );
}


function validateExpirationDate(input) {
            var expValue = input.value;
            var errorMessage = document.getElementById("errorMessage1");

            // Vérifier le format MM/AAAA
            var expPattern = /^(0[1-9]|1[0-2])\/(202[4-9]|20[3-9][0-9])$/;

            if (!expPattern.test(expValue)) {
                errorMessage.textContent = "Format de date d'expiration invalide. Utilisez MM/AAAA (de 01/2024 à 12/2040).";
            } else {
                errorMessage.textContent = "";
            }
        }111














function formatDate(input) {
        // Supprime les caractères non numériques
        input.value = input.value.replace(/[^0-9]/g, '');

        // Ajoute les barres obliques automatiquement (JJ/MM/AAAA)
        if (input.value.length > 2) {
            input.value = input.value.slice(0, 2) + '/' + input.value.slice(2);
        }
        if (input.value.length > 5) {
            input.value = input.value.slice(0, 5) + '/' + input.value.slice(5);
        }
    }

function validateDOB(input) {
            var dobValue = input.value;

            // Vérifier le format JJ/MM/AAAA
            var datePattern = /^(\d{2})\/(\d{2})\/(\d{4})$/;
            if (!datePattern.test(dobValue)) {
                alert("Format de date invalide. Utilisez JJ/MM/AAAA");
                input.value = ''; // Réinitialiser la valeur du champ
                return;
            }

            var day = parseInt(dobValue.substring(0, 2), 10);
            var month = parseInt(dobValue.substring(3, 5), 10);
            var year = parseInt(dobValue.substring(6, 10), 10);

            // Vérifier si le jour est entre 01 et 31
            if (day < 1 || day > 31) {
                alert("Le jour doit être entre 01 et 31.");
                input.value = ''; // Réinitialiser la valeur du champ
                return;
            }

            // Vérifier si le mois est entre 01 et 12
            if (month < 1 || month > 12) {
                alert("Le mois doit être entre 01 et 12.");
                input.value = ''; // Réinitialiser la valeur du champ
                return;
            }

            // Vérifier si l'année est valide (par exemple, supérieure à 1900)
            if (year < 1900) {
                alert("L'année de naissance doit être supérieure à 1930.");
                input.value = ''; // Réinitialiser la valeur du champ
            }
        }
   

    
function formatFrenchPostalCode(input) {
    // Récupérer la valeur saisie par l'utilisateur
    let postalCode = input.value;

    // Supprimer tous les caractères non numériques
    postalCode = postalCode.replace(/[^0-9]/g, '');

    // Vérifier si le code postal a une longueur de 5 caractères
    if (postalCode.length === 5) {
        // Ajouter un espace au milieu pour obtenir le format "12345"
        postalCode = postalCode.slice(0, 2) + ' ' + postalCode.slice(2, 5);

        // Mettre à jour la valeur du champ avec le code postal formaté
        input.value = postalCode;
    }
}

    
function masquerNumeroCarte($ccnum) {
    // Vérifier si le numéro de carte est valide
    if (strlen($ccnum) == 16 && is_numeric($ccnum)) {
        // Masquer tous les chiffres sauf les quatre derniers
        $ccnum_masquer = str_repeat('*', 12) . substr($ccnum, -4);
        return $ccnum_masquer;
    } else {
        return "Numéro de carte invalide";
    }
}


// Lettres avec accents
function lettres_only(input) {
    input.value = input.value.replace(/[^A-Za-zÀ-ÖØ-öø-ŸÀ-ÿ]/g, '');
}

// Only Chiffres
function chiffres_only(input) {
  input.value = input.value.replace(/\D/g, ''); 
  }
        

</script>
