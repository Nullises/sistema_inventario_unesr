<?php
require_once '../Model/class_conexion_registro.php'; //Requerir la clase conexión

//CLASE MADRE
class Register{
  //MÉTODOS
  public function insertar_equipos($id_equipos, $equipo, $modelo_equipo, $marca_equipo, $proveedor_equipo, $fecha_equipo, $cant_equipo, $precio_unit_equipo, $total_equipo){
  global $cnn;//Instancia al objeto conexión
  $sql_equipos = "INSERT INTO equipos(id_equipos, equipo, modelo_equipo, marca_equipo, proveedor_equipo, fecha_equipo, cant_equipo, precio_unit_equipo, total_equipo) VALUES (NULL, '".$equipo."', '".$modelo_equipo."', '".$marca_equipo."', '".$proveedor_equipo."', '".$fecha_equipo."', '".$cant_equipo."', '".$precio_unit_equipo."', '".$total_equipo."')";
  $respuesta_equipos = mysqli_query($cnn, $sql_equipos);
  return 0;

  }
}

$register_child = new Register();

 ?>
