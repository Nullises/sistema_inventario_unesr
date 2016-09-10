<?php
error_reporting(E_ALL);

require_once '../Model/class_conexion_registro.php'; //Requerir la clase conexión

include 'class_registro.php';//Incluir la clase registro

abstract class Petition{
  abstract function controlador_registro();
}

class Petition_child extends Petition{

//MÉTODO
public function controlador_registro(){

global $cnn; //Instancia al objeto de conexión a DB.

$correo = $_POST['correo'];


  if(filter_var($correo, FILTER_VALIDATE_EMAIL)){

      $sql = mysqli_query($cnn, "SELECT correo FROM usuarios WHERE correo = '$correo' ");

      if($sql->num_rows > 0){
      echo '<script type="text/javascript" src="../View/js/jquery-2.2.2.min.js"></script>
      <link rel="stylesheet" href="../View/css/sweetalert.css">
      <script src="../View/js/sweetalert.min.js"></script>
      <script>
      $( document ).ready(function() {
      swal("¡El usuario ya existe!", "Por favor ingrese un nuevo usuario y correo", "error");
      var millisecondsToWait = 1500;
      setTimeout(function() {
         document.location.href="../View/index.php"
      }, millisecondsToWait);
      });
      </script>';
      exit;

      }else{

      global $registro;//Instancia al objeto registro

       $respuesta = $registro->insertar($_POST['nombre'], $_POST['correo'], md5($_POST['contrasena']), md5($_POST['contrasena2']));

        //Mensaje de éxito si el usuario se registro correctamente
        echo '<script type="text/javascript" src="../View/js/jquery-2.2.2.min.js"></script>
        <link rel="stylesheet" href="../View/css/sweetalert.css">
        <script src="../View/js/sweetalert.min.js"></script>
        <script>
        $( document ).ready(function() {
        swal("¡Registro exitoso!", "Ya puede ingresar al sistema", "success");
        var millisecondsToWait = 1000;
        setTimeout(function() {
           document.location.href="../View/index.php"
        }, millisecondsToWait);
        });
        </script>';


        }//Cierre else


    }//Cierre if (filter_var)

  }//Cierre función

}//Cierre de clase

$peticion = new Petition_child();
$peticion->controlador_registro();
 ?>
