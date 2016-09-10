<?php
error_reporting(E_ALL);

require_once '../Model/class_conexion_registro.php'; //Requerir la clase conexión
include 'class_registro_form.php'; //Incluir la clase registro de formularios


class Petition_form{
  public function controller(){
    global $cnn; //Instancia al objeto conexión
    global $register_child; //Instancia al objeto registro en formularios
    if(isset($_POST['equipo'])){
      $respuesta_equipos = $register_child->insertar_equipos(NULL, $_POST['equipo'], $_POST['modelo_equipo'], $_POST['marca_equipo'], $_POST['proveedor_equipo'], $_POST['fecha_equipo'], $_POST['cant_equipo'], $_POST['precio_unit_equipo'], $_POST['total_equipo']);
    }

  }
}

$petition_form = new Petition_form();
$petition_form->controller();
 ?>
