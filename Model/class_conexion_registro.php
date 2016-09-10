<?php
//CLASE MADRE
abstract class Connect{
  abstract function conectar();
}

//CLASE HIJA
class Connect_child extends Connect{

//MÉTODO
public function conectar(){
  return mysqli_connect("localhost", "root", "", "registro");
  exit();
  }
}

//Objeto a partir de la función conexión para utilizarse en otras funciones.
$conn = new Connect_child();
$cnn = $conn->conectar();
?>
