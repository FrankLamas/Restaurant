<!DOCTYPE html>
<html>
<head>
	<title>Restaurant LR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
  	<link href="fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="fontawesome/css/brands.css" rel="stylesheet">
  	<link href="fontawesome/css/solid.css" rel="stylesheet">
</head>
<body>
	<!--Esta es la barra de navegación-->
	<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
			<a class="navbar-brand" href="index.php"><i class="fas fa-pepper-hot"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contNavbar" aria-controls="contNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="contNavbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Menú</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Realizar Pedido</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-md-auto d-md-flex">
					<li class="nav-item">
						<a class="nav-link p-2" href="https://www.facebook.com/" rel="noopener" aria-label="facebook"><i class="fab fa-facebook"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-2" href="https://www.instagram.com/" rel="noopener" aria-label="instagram"><i class="fab fa-instagram"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-2" href="https://www.snapchat.com/" rel="noopener" aria-label="snapchat"><i class="fab fa-snapchat"></i></a>
					</li>
					<div>
						<li class="nav-item dropdown">
							<a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="iniciarSesion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exclusivo Personal</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="iniciarSesion">
								<a class="dropdown-item active" href="#">Iniciar Sesión</a>
							</div>
						</li>
					</div>
				</ul>
			</div>
		</nav>
	</header>
	<br>
	<br>
	<div id="contenido">
		<?php 
		include("app/main.php");
		?>
	</div>
	
</body>
</html>