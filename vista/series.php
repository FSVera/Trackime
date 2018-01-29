<?PHP

	require_once("../controlador/paginacion.php");

	if(!isset($_SESSION))
		session_start();

	$emision = $_SESSION["emision"];
	$series = $_SESSION["series"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>ANIME TRACKER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="javascript:void(0)">AnimeTracker</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="../../controlador/front.php?link=series">Series</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Datos</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>


	<!-- Esta parte es la 'paginacion' En emision / Pendientes / Terminados-->

	<div class="container">
		<br>

		<!-- Pestañas superiores -->

		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#home">Agregar series</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#menu1">En emisión</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#menu2">Pendientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#menu3">Terminados</a>
			</li>

		</ul>

		<!-- Contenido de las pestañas -->

		<div class="tab-content">
			<div id="home" class="container tab-pane active"><br>
				<div class="row">
				<?PHP	
				$inicio = $series[0]->dato["id"];
				$fin = $series[count($series)-1]->dato["id"];

				for($i=$inicio; $i<=$fin; $i++)
					echo			
						'<div class="col-sm-6 col-md-4 col-lg-3 mt-4">' .
							'<div class="card">' .
								'<img class="card-img-top" src="../images/'.$i.'.jpg">' .
								'<div class="card-block">' .
									'<h5 align="center" class="text-bold">' . $series[$i-$inicio]->dato["nombre"] . '</h5> '.
								'</div>'.
							'</div>' . 
						'</div>';
					?>
				</div>

				<br>
				
				<ul align="center" class="pagination">
					<?PHP
					$paginacion = $_SESSION["paginacion"];
					for($i=0; $i<count($paginacion); $i++)
						echo $paginacion[$i];
					?>
				</ul>
			</div>
			<!-- En emision-->
			<div id="menu1" class="container tab-pane fade"><br></div>
			<!-- Pendientes-->
			<div id="menu2" class="container tab-pane fade"><br></div>
			<!-- Terminados-->
			<div id="menu3" class="container tab-pane fade"><br></div>
			<!-- Agrear series -->

		</div>
	</div>

</body>
</html>
