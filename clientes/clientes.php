<?php
//llamada al archivo conectar

require_once("../Empleados/clases/conectar.php");
require_once("../Empleados/clases/helpers.php");

class clientes extends conectar //creamos la clase usuarios extiende o hereda de la clase conectar
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
    $sql = "select * from cliente;";
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
    $sql = "select * from cliente where idcliente='" . $id . "'";
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
    $sql = "insert into cliente values
            (null,'" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["telefono"] . "','" . $_POST["direccion"] . "');";

    $this->db->query($sql);
  }
  public function actualizarDatos()
  {
    //sentencia sql para actualizar y/0 editar datos
    $sql = "update cliente
            set
            nombre='".$_POST["nombre"]."',
            apellidos='" . $_POST["apellidos"] . "',
            telefono='" . $_POST["telefono"] . "',
            direccion='" . $_POST["direccion"] . "'
            where
            idcliente='" . $_POST["id"] . "'";
    $this->db->query($sql);
  }
  public function eliminarDatos()
  {
    $sql = "delete from cliente
            where idcliente='" . $_GET["id"] . "'";

    $this->db->query($sql);
  }
}
