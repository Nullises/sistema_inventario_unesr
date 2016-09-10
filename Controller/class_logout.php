<?php
//Clase Madre
abstract class Logout{
  abstract function salir();
}


//Clase hija
class Logout_child extends Logout{

//Método
public function salir(){
  session_start(); //Iniciar sesión
   $_SESSION = array();//Almacenar la variable global sesión en un array
   session_destroy();//Destruir la sesión
   //Mensaje de despedida
   echo '<script type="text/javascript" src="../View/js/jquery-2.2.2.min.js"></script>
   <link rel="stylesheet" href="../View/css/sweetalert.css">
   <script src="../View/js/sweetalert.min.js"></script>
   <script>
   $( document ).ready(function() {
   swal("¡Hasta pronto!");
   var millisecondsToWait = 1000;
   setTimeout(function() {
      document.location.href="../View/index.php"
   }, millisecondsToWait);
   });
   </script>';
}

}

//Objeto de la clase hija
$logout = new Logout_child();
$logout->salir();
 ?>
