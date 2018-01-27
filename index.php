<!DOCTYPE html>
<html lang="en">
<head>
	<title>ANIME TRACKER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
     	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>

	<?PHP
		if(!isset($_SESSION))
			session_start();
	?>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="javascript:void(0)">AnimeTracker</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="./php/controlador/front.php?link=series">Series</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Datos</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
				<?php
				if (isset($_SESSION["login"])){
					echo '<li class="nav-item"> <a class="nav-link" href="./php/vista/panel.php">Panel de Usuario</a> </li>';
					echo '<li class="nav-item"> <a class="nav-link" href="./php/controlador/front.php?link=cerrarSesion">Cerrar Sesion</a> </li>';
				}else{
					echo '<li class="nav-item"> <a class="nav-link" href="./php/vista/registro.php">Registrarse</a> </li>';
					echo '<li class="nav-item"> <a class="nav-link" href="./php/vista/login.php">Logearse</a> </li>';
				}
				?>
				</ul>';
			</div>
		</nav>
	</div>

</body>
</html>
