<?php
require_once("clases/empleado.php");
$usuario = new usuarios();
$u = $usuario->getDatos();
//print_r($u);
//exit;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>..:: Listado de Productos ::..</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/magda.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/styles.css">
	<link href="../bootstrap5/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>

<body>
	<div class="container ">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php
				if (isset($_GET["m"])) {
					switch ($_GET["m"]) {
						case '1':
				?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">x</button>
								El registro se ha ingresado exitosamente
							</div>
						<?php
							break;
						case '2'
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							El registro se ha actualizado exitosamente
						</div>
					<?php
							break;
						case '3'
					?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">x</button>
						El registro ha sido eliminado exitosamente
					</div>
		<?php
					}
				}
		?>
		<h3>Listado de Empleados</h3>
			</div>
			<div class="panel-body">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<a href="../paneladmin.php" class="btn btn-primary"><i class="fa-solid fa-house"></i> Inicio</a>
					</div>
					<div class="input-group-prepend">
						<span>&nbsp;</span>
						<span><a href="agregar.php" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Agregar Nvo Empleado</a>
						</span>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="tbl">
						<thead class="thead-dark">
							<tr class="info">
								<th>ID</th>
								<th>Usuario</th>
								<th>Nombre</th>
								<th>Apellidos</th>
								<th>Email</th>
								<th colspan="2">Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($u as $dato) {
							?>
								<tr>
									<td><?php echo $dato->Id_Empleado ?></td>
									<td><?php echo $dato->Usuario ?></td>
									<td><?php echo $dato->Nombre ?></td>
									<td><?php echo $dato->Apellidos ?></td>
									<td><?php echo $dato->Email ?></td>
									<td>
										<a href="editar.php?id=<?php echo $dato->Id_Empleado ?>"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
									</td>
									<td>
										<a href="javascript:void(0);" onclick="eliminar('eliminar.php?id=<?php echo $dato->Id_Empleado ?>');"><button class="btn btn-danger"><i class="far fa-trash-alt"></i></span></button></a>

									</td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="../bootstrap5/js/jquery-1.10.2.js"></script>
	<script src="../bootstrap5/js/bootstrap.min.js"></script>
	<script src="../bootstrap5/js/funciones.js"></script>
</body>

</html>