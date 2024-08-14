<?php
//llamada al archivo conectar
require_once("../Empleados/clases/conectar.php");
require_once("../Empleados/clases/helpers.php");

class usuarios extends conectar //creamos la clase usuarios extiende o hereda de la clase conectar
{
  private $db; //crear nuestro constructor - metodo magico
  public function __construct()
  {
    $this->db = parent::conectar(); //parent p' hacer referencia a la clase padre
    parent::setNames();
  }
  public function getDatos()
  {
    //realizamos consulta a la BD
    $sql = "select * from Productos;";
    //pasar la consulta a la libreria query
    $datos = $this->db->query($sql);
    $arreglo = array(); //declaramos arrglo
    //estructura repetitiva p' almacenar los datos
    //de la cosulta en el array
    while ($reg = $datos->fetch_object()) {
      $arreglo[] = $reg;
    }
    //retorna los datos
    return $arreglo;
  }
  public function getDatosId($id)
  {
    //realizamos consulta a la BD
    $sql = "select * from productos where Cod_Producto='" . $id . "'";
    //pasar la consulta a la libreria query
    $datos = $this->db->query($sql);
    $arreglo = array(); //declaramos arrglo
    //estructura repetitiva p' almacenar los datos
    //de la cosulta en el array
    while ($reg = $datos->fetch_object()) {
      $arreglo[] = $reg;
    }
    //retorna los datos
    return $arreglo;
  }

  public function insertarDatos()
  {
    //sentencia sql para insertar datos
    $sql = "insert into productos values
            (null,'Sin Imagen','" . $_POST["nombre"] . "','" . $_POST["descripcion"] . "','" . $_POST["cantidad"] . "','" . $_POST["precio"] . "','" . $_POST["idusuario"] . "');";

    $this->db->query($sql);
  }
  public function actualizarDatos()
  {
    //sentencia sql para actualizar y/0 editar datos
    $sql = "update productos
            set
            Nombre='".$_POST["nombre"]."',
            Descripcion='" . $_POST["descripcion"] . "',
            Cantidad='" . $_POST["cantidad"] . "',
            Precio='" . $_POST["precio"] . "',
            id_usuario='" . $_POST["idusuario"] . "'
            where
            Cod_Producto='" . $_POST["id"] . "'";
    $this->db->query($sql);
  }
  public function eliminarDatos()
  {
    $sql = "delete from productos
            where Cod_Producto='" . $_GET["id"] . "'";

    $this->db->query($sql);
  }
}
