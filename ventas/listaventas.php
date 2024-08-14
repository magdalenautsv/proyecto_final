<?php
session_start();
require_once "../db_connection.php";
$id_user = $_SESSION['idUser'];
$query = mysqli_query($con, "SELECT v.*, c.idcliente, c.nombre FROM ventas v INNER JOIN cliente c ON v.id_cliente = c.idcliente");
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

	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php
				if (isset($_GET["m"])) {
					switch ($_GET["m"]) {
						case '1':
				?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">x</button>
								El Producto se ha ingresado exitosamente
							</div>
						<?php
							break;
						case '2'
						?>
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							El Producto se ha actualizado exitosamente
						</div>
					<?php
							break;
						case '3'
					?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">x</button>
						El Producto ha sido eliminado exitosamente
					</div>
		<?php
					}
				}
		?>
		<h3>Listado de Ventas</h3>
			</div>
			<div class="panel-body">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<a href="../paneladmin.php" class="btn btn-primary"><i class="fa-solid fa-house"></i>
							Inicio</a>
					</div>
				</div>
				<table class="table table-light" id="tbl">
					<thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>Cliente</th>
							<th>Total</th>
							<th>Fecha</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysqli_fetch_assoc($query)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['total']; ?></td>
								<td><?php echo $row['fecha']; ?></td>

								<td>
									<a href="javascript:void(0);"><button class="btn btn-danger"><i class='fas fa-trash-alt'></i></button></span></a>

								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="../bootstrap5/js/jquery-1.10.2.js"></script>
	<script src="../bootstrap5/js/bootstrap.min.js"></script>
	<script src="../bootstrap5/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
	<script src="../bootstrap5/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
	<script src="../bootstrap5/js/funciones.js"></script>
</body>

</html>