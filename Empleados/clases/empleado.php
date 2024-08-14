<?php
//llamada al archivo conectar
require_once("conectar.php");
require_once("helpers.php");

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
    $sql = "select * from empleados;";
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
    $sql = "select * from empleados where Id_Empleado='" . $id . "'";
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
    $sql = "insert into empleados values
            (null,'" . $_POST["usuario"] . "','" . $_POST["password"] . "','" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["fecha_nac"] . "','" . $_POST["email"] . "','" . $_POST["telefono"] . "','" . $_POST["comentario"] . "');";

    $this->db->query($sql);
  }
  public function actualizarDatos()
  {
    //sentencia sql para actualizar y/0 editar datos
    $sql = "update empleados
            set
            Nombre='".$_POST["nombre"]."',
            Contra='" . $_POST["password"] . "',
            Apellidos='" . $_POST["apellidos"] . "',
            Email='" . $_POST["email"] . "',
            Telefono='" . $_POST["telefono"] . "',
            Observacion='" . $_POST["comentario"] . "',
            Fecha_Nacimiento='" . $_POST["fecha_nac"] . "'
            where
            Id_Empleado='" . $_POST["id"] . "'";
    $this->db->query($sql);
  }
  public function eliminarDatos()
  {
    $sql = "delete from empleados
            where Id_Empleado='" . $_GET["id"] . "'";

    $this->db->query($sql);
  }
}
