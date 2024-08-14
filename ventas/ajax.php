<?php
require_once "../db_connection.php";
session_start();
if (isset($_GET['q'])) {
    $datos = array();
    $nombre = $_GET['q'];
    $cliente = mysqli_query($con, "SELECT * FROM cliente WHERE nombre LIKE '%$nombre%'");
    while ($row = mysqli_fetch_assoc($cliente)) {
        $data['id'] = $row['idcliente'];
        $data['label'] = $row['nombre'];
        $data['direccion'] = $row['direccion'];
        $data['telefono'] = $row['telefono'];
        array_push($datos, $data);
    }
    echo json_encode($datos);
    die();
} else if (isset($_GET['pro'])) {
    $datos = array();
    $nombre = $_GET['pro'];
    $producto = mysqli_query($con, "SELECT * FROM productos WHERE cod_producto LIKE '%" . $nombre . "%' OR nombre LIKE '%" . $nombre . "%'");
    while ($row = mysqli_fetch_assoc($producto)) {
        $data['id'] = $row['Cod_Producto'];
        $data['label'] = $row['Nombre'];
        $data['value'] = $row['Nombre'];
        $data['precio'] = $row['Precio'];
        $data['existencia'] = $row['Cantidad'];
        array_push($datos, $data);
    }
    echo json_encode($datos);
    die();
}else if (isset($_GET['detalle'])) {
    $id = $_SESSION['idUser'];
    $datos = array();
    $detalle = mysqli_query($con, "SELECT d.*, p.Cod_Producto, p.Nombre FROM detalle_temp d INNER JOIN productos p ON d.id_producto = p.Cod_Producto WHERE d.id_usuario = $id");
    $sumar = mysqli_query($con, "SELECT total, SUM(total) AS total_pagar FROM detalle_temp WHERE id_usuario = $id");
    while ($row = mysqli_fetch_assoc($detalle)) {
        $data['id'] = $row['id'];
        $data['nombre'] = $row['Nombre'];
        $data['cantidad'] = $row['cantidad'];
        $data['precio_venta'] = $row['precio_venta'];
        $data['sub_total'] = number_format($row['precio_venta'] * $row['cantidad'], 2, '.', ',');
        array_push($datos, $data);
    }
    echo json_encode($datos);
    die();
} else if (isset($_GET['delete_detalle'])) {
    $id_detalle = $_GET['id'];
    $verificar = mysqli_query($con, "SELECT * FROM detalle_temp WHERE id = $id_detalle");
    $datos = mysqli_fetch_assoc($verificar);
    if ($datos['cantidad'] > 1) {
        $cantidad = $datos['cantidad'] - 1;
        $query = mysqli_query($con, "UPDATE detalle_temp SET cantidad = $cantidad WHERE id = $id_detalle");
        if ($query) {
            $msg = "restado";
        } else {
            $msg = "Error";
        }
    }else{
        $query = mysqli_query($con, "DELETE FROM detalle_temp WHERE id = $id_detalle");
        if ($query) {
            $msg = "ok";
        } else {
            $msg = "Error";
        }
    }
    echo $msg;
    die();
} else if (isset($_GET['procesarVenta'])) {
    $id_cliente = $_GET['id'];
    $id_user = $_SESSION['idUser'];
    $consulta = mysqli_query($con, "SELECT total, SUM(total) AS total_pagar FROM detalle_temp WHERE id_usuario = $id_user");
    $result = mysqli_fetch_assoc($consulta);
    $total = $result['total_pagar'];
    $insertar = mysqli_query($con, "INSERT INTO ventas(id_cliente, total, id_usuario,fecha) VALUES ($id_cliente, '$total', $id_user,now())");
    if ($insertar) {
        $id_maximo = mysqli_query($con, "SELECT MAX(id) AS total FROM ventas");
        $resultId = mysqli_fetch_assoc($id_maximo);
        $ultimoId = $resultId['total'];
        $consultaDetalle = mysqli_query($con, "SELECT * FROM detalle_temp WHERE id_usuario = $id_user");
        while ($row = mysqli_fetch_assoc($consultaDetalle)) {
            $id_producto = $row['id_producto'];
            $cantidad = $row['cantidad'];
            $precio = $row['precio_venta'];
            $insertarDet = mysqli_query($con, "INSERT INTO detalle_venta(id_producto, id_venta, cantidad, precio) VALUES ($id_producto, $ultimoId, $cantidad, '$precio')");
            $stockActual = mysqli_query($con, "SELECT * FROM productos WHERE cod_producto = $id_producto");
            $stockNuevo = mysqli_fetch_assoc($stockActual);
            $stockTotal = $stockNuevo['Cantidad'] - $cantidad;
            $stock = mysqli_query($con, "UPDATE productos SET cantidad = $stockTotal WHERE cod_producto = $id_producto");
        } 
        if ($insertarDet) {
            $eliminar = mysqli_query($con, "DELETE FROM detalle_temp WHERE id_usuario = $id_user");
            $msg = array('id_cliente' => $id_cliente, 'id_venta' => $ultimoId);
        } 
    }else{
        $msg = array('mensaje' => 'error');
    }
    echo json_encode($msg);
    die();
}

if (isset($_POST['action'])) {
    $id = $_POST['id'];
    $cant = $_POST['cant'];
    $precio = $_POST['precio'];
    $id_user = $_SESSION['idUser'];

    $total = $precio * $cant;

    $verificar = mysqli_query($con, "SELECT * FROM detalle_temp WHERE id_producto = $id AND id_usuario = $id_user");
    $result = mysqli_num_rows($verificar);
    $datos = mysqli_fetch_assoc($verificar);
    if ($result > 0) {
        $cantidad = $datos['cantidad'] + 1;
        $total_precio = $cantidad * $total;
        $query = mysqli_query($con, "UPDATE detalle_temp SET cantidad = $cantidad, total = '$total_precio' WHERE id_producto = $id AND id_usuario = $id_user");
        if ($query) {
            $msg = "actualizado";
        } else {
            $msg = "Error al ingresar";
        }
    }else{
        $query = mysqli_query($con, "INSERT INTO detalle_temp(id_usuario, id_producto, cantidad, precio_venta, total) VALUES ($id_user, $id, $cant, '$precio', $total)");
        if ($query) {
            $msg = "registrado";
        }else{
            $msg = "Error al ingresar";
        }
    }
    echo json_encode($msg);
    die();
}