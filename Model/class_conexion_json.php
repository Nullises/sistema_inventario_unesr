<?php
require_once '../Model/class_conexion_registro.php'; //Requerir la clase conexión

class ConexionJson{

  public function llamar(){
    global $cnn;

    //CAPTURA DE NOMBRE
    $sql = "SELECT nombre, correo FROM usuarios";
    $resultado = mysqli_query($cnn, $sql);
    $rows = array();
    $rows['nombre'] = 'Nombre: ';
    $rows1 = array();
    $rows1['correo'] = 'Correo: ';
    while($r = mysqli_fetch_array($resultado)){
      $rows['data'][] = $r['nombre'];
      $rows1['data'][] = $r['correo'];
    }

  $pantalla = array();
  array_push($pantalla, $rows);
  array_push($pantalla, $rows1);

  print json_encode($pantalla);
  }

}

$conexionJson = new ConexionJson();
$json = $conexionJson->llamar();
mysqli_close($cnn);
 ?>
