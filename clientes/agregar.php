<?php
require_once("clientes.php");
if (isset($_POST["btnGuardar"])) {
echo var_dump($_POST);
echo $_POST["nombre"];
	$u = new clientes();
	$u->insertarDatos();
	header("Location: index.php?m=1");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>..:: Listado de Empleados ::..</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap-theme.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/magda.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<style>
	.container{
		width: 45%;
	}
</style>
<body>
	<div class="container">
		<h1>
			<ol class="breadcrumb">
				<li><a href="index.php">Regresar</a></li>
				<li class="active">Cliente</li>
			</ol>
		</h1>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Agregar Empleado</h2>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="fname" name="nombre" type="text" placeholder="Ingresar Nombre" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="lname" name="apellidos" type="text" placeholder="Ingresar Apellido" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-envelope bigicon"></i></div>
							</div>
							<input id="lname" name="direccion" type="text" placeholder="Ingresar Direccion" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-phone-square bigicon"></i></div>
							</div>
							<input id="lname" name="telefono" type="text" placeholder="Ingresar Telefono" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<div class="d-grid gap-4 col-6  mx-auto">
							<button type="submit" name="btnGuardar" class="btn btn-primary btn-lg"><h2>Guardar</h2></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="../bootstrap5/js/jquery-1.10.2.js"></script>
	<script src="../bootstrap5/js/bootstrap.min.js"></script>

	<script src="../bootstrap5/js/modernizr-custom.js"></script>
	<script src="../bootstrap5/js/polyfiller.js"></script>
	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {
			types: 'date'
		});
		webshims.polyfill('forms forms-ext');
	</script>
</body>

</html>