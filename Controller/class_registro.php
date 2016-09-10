<?php
require_once '../Model/class_conexion_registro.php'; //Requerir la clase conexión

//CLASE MADRE

abstract class SignIn{
  abstract function insertar($nombre, $correo, $contrasena);
}

//SUBCLASE
class SignIn_child extends SignIn{

//MÉTODOS:
public function insertar($nombre, $correo, $contrasena){
 global $cnn; //Conexión a DB
$sql = "INSERT INTO usuarios(nombre, correo, contrasena)VALUES('".$nombre."', '".$correo."', '".$contrasena."')";
$respuesta = mysqli_query($cnn, $sql);//Consulta a la DB.
return 0; //Devuelve si el valor es verdadero falso
}

}//Cierra la Subclase

//Instancia de la clase para usarse en otras clases
$registro = new SignIn_child();

 ?>
