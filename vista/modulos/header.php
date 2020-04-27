<!DOCTYPE html>
<html lang="es">
<head>

	<!--TÍTULO -->
	<title>CIISA HOT | <?php echo $title;?></title>

	<!--METAS PARA LA NAVEGACIÓN Y DESCRIPCIÓN DEL SITIO -->
	<meta charset="utf-8">
	<meta name="description" content="La comida rápida número 1 de Chile" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">

    <!--FAVICON -->
	<link rel="shortcut icon" href="vista/images/favicon.png" type="image/png">

	<!--CSS DE BOOTSTRAP -->
	<link rel="stylesheet" href="vista/css/bootstrap.min.css">

	<!--CSS CON FUENTES DE ÍCONOS DE FONT AWESOME -->
	<link href="vista/css/all.min.css" rel="stylesheet">

	<!--FUENTE DE LETRA DEL SITIO -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">

	<!--SCRIPT JAVASCRIPT PARA DESLIZAMIENTO DEL MENÚ EN FORMATO RESPONSIVO MÓVIL -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="vista/js/bootstrap.min.js"></script>

  <!--CÓDIGO DE CSS PARA CAMBIAR CIERTOS ESTILOS PREDETERMINADOS DE BOOTSTRAP -->
  <style>
	body {
	  font-family: 'Source Sans Pro', sans-serif;
	}
	a{color: white;}
	.menu a{color: black;}
	a:hover{color: green;
			text-decoration: none;}
  </style>


</head>

<body>

	<!--CABECERA -->
       <header>

			<ul class="menu my-3 d-block d-md-flex text-center list-unstyled">
				
				<li class="ml-2 m-md-auto">
					<a href="index.php" class="logo"><img src="vista/images/logo.png" alt="Logo Ciisa Hot" width="140" class="img-fluid"></a>
				</li>
	
				<li class="ml-auto my-auto">
					<i class="fa fa-map-marker align-middle text-danger mr-1"></i>
					<span class="font-weight-bold" ><a href="https://www.google.com/maps/place/Prat+240,+Quillota,+Valpara%C3%ADso/@-32.8770728,-71.2478883,17z/data=!3m1!4b1!4m5!3m4!1s0x9689cd9c81f28829:0xea37883444701e6a!8m2!3d-32.8770728!4d-71.2456996" target="_blank">Prat 240, Quillota</a></span>
				</li>
				
				<li class="ml-3 my-auto">
					<i class="fa fa-phone align-middle text-danger mr-1"></i>
					<span class="font-weight-bold"><a href="tel:332416798">332416798</a></span>
				</li>

				<li class="ml-3 my-auto">
					<i class="fab fa-whatsapp align-middle text-danger mr-1"></i>
					<span class="font-weight-bold"><a href="https://api.whatsapp.com/send?phone=56912345678&text=Hola, quiero hacer una consulta" target="_blank">+56912345678</a></span>
				</li>

				<li class="ml-3 my-auto mr-auto">
					<i class="fas fa-envelope align-middle text-danger mr-1"></i>
					<span class="font-weight-bold"><a href="mailto:contacto@ciisahot.cl"> contacto@ciisahot.cl</a></span>
				</li>

			</ul>
		</header>
		
		<!--NAVEGADOR -->

		<nav class="navbar navbar-expand-md bg-success navbar-dark">
		
			<button class="navbar-toggler bg-dark text-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
					
		   <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mt-3 mt-md-0 mx-auto">
					<li class="nav-item"><a href="index.php"class="nav-link font-weight-bold">Inicio</a></li>
					<li class="nav-item ml-md-5"><a href="nuestros-platos.php" class="nav-link font-weight-bold">Nuestros Platos</a></li>
					<li class="nav-item ml-md-5"><a href="index.php" class="nav-link font-weight-bold">Contacto</a></li>
				</ul>
			</div>
	
		</nav>