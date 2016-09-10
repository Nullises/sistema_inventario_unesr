<?php

//Validación de entrada de página

session_start();

  $isvalid = false;

  if(isset($_SESSION['nombre']) && $_SESSION['nombre'] != ''){
    $isvalid = true;
  }
  if(!$isvalid && (stripos($referer, "index.php"))){
    $isvalid = true;
  }
  if(!$isvalid){
    header('Location: index.php');
  }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de inventario de la Unesr</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/estiloinventario_inventario.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.6.1/css/font-awesome.min.css">
<script src="js/multiplicar.js"></script>
</head>
<body>
<!--BARRA DE NAVEGACIÓN-->
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion" aria-expanded="false">
                    <span class="sr-only">Mostrar/Ocultar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="fonts/LOGO-UNESR.png" alt="logo" id="unesrnavbar"></a>
            </div>
            <div class="collapse navbar-collapse" id="navegacion">
                <ul class="nav navbar-nav">
                    <li><a href="#" role="button" data-toggle="modal" data-target="#modalequipos">EQUIPOS</a></li>
                    <li><a href="#" role="button" data-toggle="modal" data-target="#modalconsumibles">CONSUMIBLES</a></li>
                    <li><a href="#" role="button" data-toggle="modal" data-target="#modalpartes">PARTES</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-hashpopup="true" aria-expanded="true">
                          <?php echo $_SESSION['nombre'];?>
                          <span><i class="fa fa-user" aria-hidden="true" style="font-size:14pt"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../Controller/class_logout.php">CERRAR SESIÓN <span class="glyphicon glyphicon-remove"></span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="row">
  <div class="container col-sm-2">
    <!--ACORDEON-->
    <div class="panel-group" id="acordeon" role="tablist" aria-multiselectable="true">
          <!--PANEL 1-->
          <div class="panel panel-success">
           <!--Encabezado del Panel 1-->
            <div class="panel-heading text-center" role="tab">
               <h3 class="panel-title">
                    <a role="button" href="#colapso1" data-toggle="collapse" data-parent="#acordeon" aria-expanded="true" aria-controls="colapso1">
                    Búsqueda de artículos
                  </a><br><br>
                  <span class="glyphicon glyphicon-search"></span>
               </h3>
            </div>
            <!--Cuerpo del Panel 1-->
            <div id="colapso1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="encabezado1">
               <div class="panel-body" id="panel">
                 <!--Campo de búsqueda-->
                 <div class="input-group">
                   <input type="text" class="form-control" placeholder="Buscar por">
                   <span class="input-group-btn">
                     <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modalpanel1"><span class="glyphicon glyphicon-search"></span></button>
                   </span>
                 </div>
               </div>
            </div>
            </div>
           <!--PANEL 2-->
           <div class="panel panel-danger">
               <!--Encabezado del Panel 2-->
               <div class="panel-heading text-center" role="tab" id="encabezado2">
                   <h3 class="panel-title">
                       <a role="button" href="#colapso2" data-toggle="collapse" data-parent="#acordeon" aria-expanded="true" aria-controls="colapso2">
                           Eliminar artículos
                       </a><br><br>
                       <span class="glyphicon glyphicon-remove"></span>
                   </h3>
               </div>
               <!--Cuerpo del Panel 2-->
               <div id="colapso2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="encabezado2">
                   <div class="panel-body text-center" id="panel">
                     <!-- Boton cascada -->
                     <div class="btn-group">
                       <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Eliminar: <span class="caret"></span>
                       </button>
                       <ul class="dropdown-menu">
                         <li><a data-toggle="modal" data-target="#modalpanel2punto1">Equipos</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a data-toggle="modal" data-target="#modalpanel2punto2">Consumibles</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a data-toggle="modal" data-target="#modalpanel2punto3">Partes</a></li>
                       </ul>
                     </div>
                   </div>
               </div>
           </div>
           <!--PANEL 3-->
          <div class="panel panel-info">
              <!--Encabezado del Panel 3-->
              <div class="panel-heading text-center" role="tab" id="encabezado3">
                  <h4 class="panel-title">
                      <a href="#colapso3" data-toggle="collapse" data-parent="#acordeon" aria-expanded="true" aria-controls="colapso3">
                        Visualizar artículos
                      </a><br><br>
                        <span class="glyphicon glyphicon-eye-open"></span>
                  </h4>
              </div>
              <!--Cuerpo del Panel 3-->
              <div id="colapso3" class="panel-collapse collapse text-center" role="tabpanel" aria-labelledby="encabezado3">
                  <div class="tablist">
                  <a data-toggle="modal" data-target="#modalpanel3punto1" class="list-group-item">EQUIPOS</a>
                  <a data-toggle="modal" data-target="#modalpanel3punto2" class="list-group-item">CONSUMIBLES</a>
                  <a data-toggle="modal" data-target="#modalpanel3punto3" class="list-group-item">PARTES</a>
                  </div>
          </div>
        </div>
        <!--PANEL 4-->
       <div class="panel panel-warning">
           <!--Encabezado del Panel 4-->
           <div class="panel-heading text-center" role="tab" id="encabezado4">
               <h4 class="panel-title">
                   <a href="#colapso4" data-toggle="collapse" data-parent="#acordeon" aria-expanded="true" aria-controls="colapso4">
                    Cálculo de artículos
                   </a><br><br>
                     <span class="glyphicon glyphicon-usd"></span>
               </h4>
           </div>
           <!--Cuerpo del Panel 4-->
           <div id="colapso4" class="panel-collapse collapse text-center" role="tabpanel" aria-labelledby="encabezado4">
               <div class="tablist">
               <a data-toggle="modal" data-target="#modalpanel4punto1"  class="list-group-item">EQUIPOS</a>
               <a data-toggle="modal" data-target="#modalpanel4punto2"  class="list-group-item">CONSUMIBLES</a>
               <a data-toggle="modal" data-target="#modalpanel4punto3"  class="list-group-item">PARTES</a>
               </div>
       </div>
     </div>
    </div>
  </div>
  <!--FIN DEL ACORDEON-->
  <!--CONTENEDOR PRINCIPAL-->
  <div class="container col-sm-10" id="contenedor">
  <!--MENSAJE DE AVISO-->
  <div class="alert alert-success text-center" role="alert"><strong>MODO ADMINISTRADOR</strong></div>
      <div class="row-fluid" id="contenedorprincipal">
      <!--EQUIPOS-->
      <div class="col-md-6 col-lg-4">
          <div class="thumbnail hovereffect" id="thumbnail" data-toggle="modal" data-target="#modalequipos" >
              <img src="fonts/EQUIPOS-ICON.png" alt="Equipos">
              <div class="overlay">
                 <h2 id="textohover">Inventario de Equipos</h2>
             </div>
          </div>
      </div>
      <!--CONSUMIBLES-->
      <div class="col-md-6 col-lg-4">
          <div class="thumbnail hovereffect" id="thumbnail" data-toggle="modal" data-target="#modalconsumibles">
              <img src="fonts/CONSUMIBLES-ICON.png" alt="Consumbibles">
              <div class="overlay">
                 <h2 id="textohover">Inventario de Consumbibles</h2>
             </div>
          </div>
      </div>
      <!--PARTES-->
      <div class="col-md-6 col-lg-4" data-toggle="modal" data-target="#modalpartes">
          <div class="thumbnail hovereffect" id="thumbnail">
              <img src="fonts/PARTES-ICON.png" alt="Partes">
              <div class="overlay">
                 <h2 id="textohover">Inventario de Partes</h2>
             </div>
          </div>
      </div>
      </div>
  </div>
  <!--MODAL EQUIPOS-->
  <div class="modal fade" id="modalequipos" tabindex="-1" role="dialog" aria-labelledby="etiquetamodalequipos">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <!--Titulo del Modal-->
              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title text-center" id="etiquetamodalequipos">INVENTARIO DE EQUIPOS</h4>
              </div>
              <!--Cuerpo del Modal-->
              <div class="modal-body">
                  <div class="panel panel-success">
                  <!--Cabezal Formulario-->
                 <div class="panel-heading">
                     <h1 class="panel-title text-center">EQUIPOS</h1>
                 </div>
                  <!--Formulario Equipos-->
                  <div class="panel-body text-center">
                      <form method="POST" action="../Controller/class_peticion_form.php" id="multiplicar" class="form-inline" role="form">
                          <!--DATOS DEL EQUIPO-->
                          <div class="panel panel-success">
                              <div class="panel-heading">
                                  <h5>Datos del Equipo</h5>
                              </div>
                              <div class="panel-body">
                                  <div class="form-group col-md-3">
                                      <label for="equipo">Equipo*</label>
                                      <input type="text" name="equipo" class="form-control" placeholder="Describa el equipo" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="modelo">Modelo*</label>
                                      <input type="text" name="modelo_equipo" class="form-control" placeholder="Describa el modelo" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="proveedor">Marca</label>
                                      <input type="text" name="marca_equipo" class="form-control" placeholder="Describa la marca">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="bn">Proveedor</label>
                                      <input type="text" name="proveedor_equipo" class="form-control" placeholder="Describa el proveedor">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                          <!--DATOS DE LA COMPRA-->
                          <div class="panel panel-success">
                              <div class="panel-heading">
                                  <h5>Datos de la compra</h5>
                              </div>
                              <div class="panel-body">
                                  <div class="form-group col-md-3">
                                      <label for="fechacompra">Fecha de compra*</label>
                                      <input type="date" name="fecha_equipo" class="form-control" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicando">Cantidad*</label>
                                      <input type="number" class="form-control" id="multiplicando" name="cant_equipo" value=0 onChange="multiplicar();" placeholder="Cantidad" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicador">Precio Unitario*</label>
                                      <input type="text" class="form-control" id="multiplicador" name="precio_unit_equipo" value=0 onChange="multiplicar();" placeholder="Bs." required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="resultado">Total</label>
                                      <input type="text" class="form-control" id="resultado" name="total_equipo" placeholder="Bs.">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                      <div class="panel-footer-inverse text-center">
                          <button type="submit" name="enviar_equipo" class="btn btn-primary">Enviar</button>
                          <button type="reset" class="btn btn-danger">Borrar</button>
                      </div>
                      </form>
                  </div>
                  </div>
                  <!--Formulario Equipos-->
              </div>
      </div>
  </div>
  </div>
  <!--MODAL CONSUMIBLES-->
  <div class="modal fade" id="modalconsumibles" tabindex="-1" role="dialog" aria-labelledby="etiquetamodalconsumibles">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <!--Titulo del Modal-->
              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title text-center" id="etiquetamodalconsumibles">INVENTARIO DE CONSUMIBLES</h4>
              </div>
              <!--Cuerpo del Modal-->
              <div class="modal-body">
                  <div class="panel panel-info">
                  <!--Cabezal Formulario-->
                 <div class="panel-heading">
                     <h1 class="panel-title text-center">CONSUMIBLES</h1>
                 </div>
                  <!--Formulario Consumibles-->
                  <div class="panel-body text-center">
                      <form action="../Controller/class_peticion_form.php" id="multiplicar2" method="POST" class="form-inline" role="form">
                          <!--DATOS DEL ARTÍCULO-->
                          <div class="panel panel-info">
                              <div class="panel-heading">
                                  <h5>Datos del Artículo</h5>
                              </div>
                              <div class="panel-body">
                                  <div class="form-group col-md-3">
                                      <label for="articulo">Artículo*</label>
                                      <input type="text" id="articulo" class="form-control" placeholder="Describa el artículo" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="marca">Marca*</label>
                                      <input type="text" id="marca_consumible" class="form-control" placeholder="Describa la marca" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="proveedor">Proveedor</label>
                                      <input type="text" id="proveedor_consumible" class="form-control" placeholder="Describa el proveedor">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="codigo">Código</label>
                                      <input type="text" id="codigo_consumible" class="form-control" placeholder="Ingrese 4 últimos números del código">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                          <!--DATOS DE LA COMPRA-->
                          <div class="panel panel-info">
                              <div class="panel-heading">
                                  <h5>Datos de la compra</h5>
                              </div>
                              <div class="panel-body">
                                  <div class="form-group col-md-3">
                                      <label for="fechacompra">Fecha de compra*</label>
                                      <input type="date" id="fecha_consumible" class="form-control" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicando2">Cantidad*</label>
                                      <input type="number" id="multiplicando2" class="form-control" value=0 onChange="multiplicar2();" placeholder="Cantidad" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicador2">Precio Unitario*</label>
                                      <input type="text" id="multiplicador2" class="form-control" value=0 onChange="multiplicar2();" placeholder="Bs." required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="resultado2">Total</label>
                                      <input type="text" id="resultado2" class="form-control" placeholder="Bs.">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                      <div class="panel-footer-inverse text-center">
                          <button type="submit" id="enviar_consumible" name="enviar_consumible" class="btn btn-primary">Enviar</button>
                          <button type="reset" class="btn btn-danger">Borrar</button>
                      </div>
                      </form>
                  </div>
                  </div>
                  <!--Formulario Consumibles-->
              </div>
      </div>
  </div>
  </div>
  <!--MODAL PARTES-->
  <div class="modal fade" id="modalpartes" tabindex="-1" role="dialog" aria-labelledby="etiquetamodalpartes">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <!--Titulo del Modal-->
              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title text-center" id="etiquetamodalpartes">INVENTARIO DE PARTES</h4>
              </div>
              <!--Cuerpo del Modal-->
              <div class="modal-body">
                  <div class="panel panel-danger">
                  <!--Cabezal Formulario-->
                 <div class="panel-heading">
                     <h1 class="panel-title text-center">PARTES</h1>
                 </div>
                  <!--Formulario Partes-->
                  <div class="panel-body text-center">
                      <form action="../Controller/class_peticion_form.php" id="multiplicar3" method="POST" class="form-inline" role="form">
                          <!--DATOS DEL PERIFÉRICO-->
                          <div class="panel panel-danger">
                              <div class="panel-heading">
                                  <h5>Datos del Periférico</h5>
                              </div>
                                  <div class="form-group col-md-3">
                                      <label for="periferico">Descripción*</label>
                                      <input type="text" id="periferico" class="form-control" placeholder="Describa el periférico" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="modelo">Modelo</label>
                                      <div class="panel-body">
                                      <input type="text" id="modelo_parte" class="form-control" placeholder="Describa modelo" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="proveedor">Marca</label>
                                      <input type="text" id="marca_parte" class="form-control" placeholder="Describa la marca">
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="codigo">Proveedor</label>
                                      <input type="text" id="proveedor_parte" class="form-control" placeholder="Describa el proveedor">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                          <!--DATOS DE LA COMPRA-->
                          <div class="panel panel-danger">
                              <div class="panel-heading">
                                  <h5>Datos de la compra</h5>
                              </div>
                              <div class="panel-body">
                                  <div class="form-group col-md-3">
                                      <label for="fechacompra">Fecha de compra*</label>
                                      <input type="date" id="fecha_parte" class="form-control" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicando3">Cantidad*</label>
                                      <input type="number" id="multiplicando3" class="form-control" value=0 onChange="multiplicar3();" placeholder="Cantidad" required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="multiplicador3">Precio Unitario*</label>
                                      <input type="text" id="multiplicador3" class="form-control" value=0 onChange="multiplicar3();" placeholder="Bs." required>
                                  </div>
                                  <div class="form-group col-md-3">
                                      <label for="resultado3">Total</label>
                                      <input type="text" id="resultado3" class="form-control" placeholder="Bs.">
                                  </div>
                                  <p>* (Estos campos son obligatorios)</p>
                              </div>
                          </div>
                      <div class="panel-footer-inverse text-center">
                          <button type="submit" id="enviar_parte" name="enviar_parte" class="btn btn-primary">Enviar</button>
                          <button type="reset" class="btn btn-danger">Borrar</button>
                      </div>
                      </form>
                  </div>
                  </div>
                  <!--Formulario Partes-->
              </div>
      </div>
  </div>
  </div>

  <!--MODAL PANEL 1 (BÚSQUEDA DE ARTÍCULOS)-->
<div class="modal fade" id="modalpanel1" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel1">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!--TITULO-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="etiquetamodalpanel1">BÚSQUEDA DE ARTÍCULOS</h4>
      </div>
      <!--CUERPO-->
      <div class="modal-body">
        <div class="panel panel-success">
          <!--Cabezal-->
         <div class="panel-heading">
             <h1 class="panel-title text-center">ARTÍCULOS</h1>
         </div>
         <!--Cuerpo-->
         <div class="panel-body text-center">

         </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--MODAL PANEL 2.1 (ELIMINAR ARTÍCULOS EQUIPOS)-->
<div class="modal fade" id="modalpanel2punto1" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel2punto1">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel2punto1">ELIMINAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">EQUIPOS</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 2.2 (ELIMINAR ARTÍCULOS CONSUMIBLES)-->
<div class="modal fade" id="modalpanel2punto2" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel2punto2">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel2punto2">ELIMINAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">CONSUMIBLES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 2.3 (ELIMINAR ARTÍCULOS PARTES)-->
<div class="modal fade" id="modalpanel2punto3" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel2punto3">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel2punto3">ELIMINAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">PARTES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 3.1 (VISUALIZAR ARTÍCULOS EQUIPOS)-->
<div class="modal fade" id="modalpanel3punto1" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel3punto1">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel3punto1">VISUALIZAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">EQUIPOS</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 3.2 (VISUALIZAR ARTÍCULOS CONSUMIBLES)-->
<div class="modal fade" id="modalpanel3punto2" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel3punto2">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel3punto2">VISUALIZAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">CONSUMIBLES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 3.3 (VISUALIZAR ARTÍCULOS PARTES)-->
<div class="modal fade" id="modalpanel3punto3" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel3punto3">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel3punto3">VISUALIZAR ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">PARTES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 4.1 (CÁLCULO ARTÍCULOS EQUIPOS)-->
<div class="modal fade" id="modalpanel4punto1" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel4punto1">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel4punto1">CALCULAR TOTAL ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">EQUIPOS</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 4.2 (CÁLCULO ARTÍCULOS CONSUMIBLES)-->
<div class="modal fade" id="modalpanel4punto2" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel4punto2">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel4punto2">CALCULAR TOTAL ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">CONSUMIBLES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>

<!--MODAL PANEL 4.3 (CÁLCULO ARTÍCULOS PARTES)-->
<div class="modal fade" id="modalpanel4punto3" tabindex="-1" role="dialog" arialabelledby="etiquetamodalpanel4punto3">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <!--TITULO-->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="etiquetamodalpanel4punto3">CALCULAR TOTAL ARTÍCULOS</h4>
    </div>
    <!--CUERPO-->
    <div class="modal-body">
      <div class="panel panel-default">
        <!--Cabezal-->
       <div class="panel-heading">
           <h1 class="panel-title text-center">PARTES</h1>
       </div>
       <!--Cuerpo-->
       <div class="panel-body text-center">

       </div>
      </div>
    </div>
  </div>
</div>
</div>
  <!--FOOTER-->
  <footer>
          <nav class="navbar navbar-default navbar-fixed-bottom">
             <div class="container-fluid">
                 <p class="text-center">Sistema de Inventario UNESR - Caracas - Venezuela</p>
             </div>
          </nav>
  </footer>
</div>
<!--SCRIPTS-->
<script src="js/jquery-2.2.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>
