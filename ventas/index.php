<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::: Registrar Venta :::.</title>
    <link href="../bootstrap5/css/styles.css" rel="stylesheet" />
    <link href="../bootstrap5/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="../bootstrap5/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <h4 class="text-center">Datos del Cliente</h4>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div>
                                                <input type="hidden" id="idcliente" value="1" name="idcliente" required>
                                                <label>Nombre</label>
                                                <input type="text" name="nom_cliente" id="nom_cliente" class="form-control" placeholder="Ingrese nombre del cliente" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Teléfono</label>
                                                <input type="number" name="tel_cliente" id="tel_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Dirreción</label>
                                                <input type="text" name="dir_cliente" id="dir_cliente" class="form-control" disabled required>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary text-white text-center">
                                Datos Venta
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label><i class="fas fa-user"></i> VENDEDOR</label>
                                            <p style="font-size: 16px; text-transform: uppercase; color: red;"><?php echo  $_SESSION["idUser"]; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Buscar Producto
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input id="producto" class="form-control" type="text" name="producto" placeholder="Ingresa el código o nombre">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="tblDetalle">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripción</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Precio Total</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody id="detalle_venta">

                                </tbody>
                                <tfoot>
                                    <tr class="font-weight-bold">
                                        <td colspan=3>Total Pagar</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-primary" id="btn_generar"><i class="fas fa-save"></i> Generar Venta</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../bootstrap5/js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap5/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../bootstrap5/js/scripts.js"></script>
<script src="../bootstrap5/js/funciones.js"></script>
<script src="../bootstrap5/js/jquery.dataTables.min.js"></script>
<script src="../bootstrap5/js/sweetalert2.all.min.js"></script>
<script src="../bootstrap5/js/dataTables.bootstrap4.min.js"></script>
<script src="../bootstrap5/js/jquery-ui/jquery-ui.js"></script>

</html>