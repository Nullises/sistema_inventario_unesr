<?php
require_once '../Model/class_conexion_registro.php'; //Requerir la conexión

//CLASE MADRE
abstract class Login{
  abstract function acceder();
}

//CLASE HIJA
class Login_child extends Login{

//Método
public function acceder(){

  $correo_l = $_POST['correo_l'];
  $contrasena_l = md5($_POST['contrasena_l']);

  global $cnn;//Instancia al objeto global de conexión
  $consulta = "SELECT nombre, correo, contrasena FROM usuarios WHERE correo = '$correo_l' ";//Consulta sql
  $r = mysqli_query($cnn, $consulta);//Almacenar en variable $r el query de la consulta

  if($row = mysqli_fetch_array($r)){//Almacenar en variable $row un array
    if($row['contrasena'] == $contrasena_l){//Si las contraseñas coinciden
      session_start();//Iniciar sesión
      $_SESSION['nombre'] = $row['nombre'];//Almacenar variable nombre

      //Mensaje de éxito
      echo '<script type="text/javascript" src="../View/js/jquery-2.2.2.min.js"></script>
      <link rel="stylesheet" href="../View/css/sweetalert.css">
      <script src="../View/js/sweetalert.min.js"></script>
      <script>
      $( document ).ready(function() {
      swal("¡Bienvenido!", "", "success");
      var millisecondsToWait = 1000;
      setTimeout(function() {
         document.location.href="../View/inventario.php"
      }, millisecondsToWait);
      });
      </script>';

    }else{

    //Mensaje de alerta si la contraseña es errónea
    echo '<script type="text/javascript" src="../View/js/jquery-2.2.2.min.js"></script>
    <link rel="stylesheet" href="../View/css/sweetalert.css">
    <script src="../View/js/sweetalert.min.js"></script>
    <script>
    $( document ).ready(function() {
    swal("¡Contraseña errónea!", "Por favor ingrese la contraseña correcta", "error");
    var millisecondsToWait = 1500;
    setTimeout(function() {
       document.location.href="../View/index.php"
    }, millisecondsToWait);
    });
    </script>';
    exit;

    }//Fin del else
  }//Fin del if
}//Fin de la función


}//Fin de la clase

$login = new Login_child();//Nuevo objeto de la clase Login
$login->acceder();//Instancia al método acceder()


 ?>
