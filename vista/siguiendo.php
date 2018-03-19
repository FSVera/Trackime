<?PHP
	require_once("../controlador/perfil.php");
	$usuario = $_SESSION["usuario"];

	require_once("../controlador/siguiendo.php");
	$siguiendo = new Siguiendo($_REQUEST["usuario"]);
	$usuarios = $siguiendo->obtenerDatos();

?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script src="../javascript/imagenes.js"></script>
	<script src="../javascript/ajax.js"></script>	
	<link rel="stylesheet" href="../css/images.css">
</head>
<body>

	<!-- Barra de navegacion -->
	<?php require "./utils/navegacion.php"?>

	<div class="container">
		<div class="row justify-content-center mt-5">

			<!-- Imágen del usuario -->
			<?php require "./utils/usuario.php"?>

			<!-- Seguidores...etc -->

			<div class="col-sm-8">
				<ul class="nav nav-tabs">
					<li class="nav-item"> <a class="nav-link" href="./perfil.php?usuario=<?=$usuario[0]->dato["usuario"]?>">Perfil</a> </li>
					<li class="nav-item"> <a class="nav-link active" href="./siguiendo.php?usuario=<?=$usuario[0]->dato["usuario"]?>">Siguiendo</a> </li>
					<li class="nav-item"> <a class="nav-link" href="./seguidores.php?usuario=<?=$usuario[0]->dato["usuario"]?>">Seguidores</a> </li>
					<li class="nav-item"> <a class="nav-link" href="./usuarioPendientes.php?usuario=<?=$usuario[0]->dato["usuario"]?>">Pendientes</a> </li>
					<li class="nav-item"> <a class="nav-link" href="./usuarioTerminadas.php?usuario=<?=$usuario[0]->dato["usuario"]?>">Terminadas</a> </li>
				</ul>		

				<div class="tab-content">
					<div id="seleccionado" class="container tab-pane active">

						<div class="row mt-2">
							<?php foreach ($usuarios as $usuario): ?>
								<div class="col-sm-5 col-md-4 col-lg-3 mt-2">
									<div class="card">
										<a href="./perfil?usuario=<?= $usuario->dato["siguiendo"] ?>"><img class="card-img-top" src="../images/usuario/<?=$usuario->dato["imagen"]?>.png"></a>
										<div class="card-block"><h5 align="center" class="text-bold"><?= $usuario->dato["siguiendo"] ?></h5></div>
									</div>
								</div>
							<?php endforeach?>
						</div>

					</div>
				</div>


			</div>

		</div>
	</div>

	<?PHP require("./utils/modal.php")?>

</body>
</html>
