<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de inventario de la Unesr</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/estiloinventario.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.6.1/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target="#navegacion">
<!--BARRA DE NAVEGACIÓN-->
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                <ul class="nav navbar-nav" role="navigation">
                    <li><a href="#carrusel">REGISTRO</a></li>
                    <li><a href="#contacto" class="hidden-xs hidden-sm">CONTACTO</a></li>
                </ul>
                <form action="../Controller/class_login.php" method="POST" class="navbar-form navbar-right">
				<div class="form-group">
				    <label for="acceder">¡Ingresa!</label>
					<input type="email" class="form-control" name="correo_l" id="correo_l" placeholder="Correo Electrónico" required>
				</div>
				<div class="form-group">
				    <input type="password" class="form-control" name="contrasena_l" id="contrasena_l" placeholder="Contraseña" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">
					<span>INGRESAR</span>
				</button>
			</form>
            </div>
        </div>
    </nav>
</header>
<!--CARRUSEL-->
<div class="row">
  <div class="col-xs-12">
       <div id="carrusel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <!--deslizador-->
        <div class="carousel-inner" role="listbox">
            <!--imagen1-->
            <div class="item active">
                <img src="fonts/tech.jpg" alt="tecnología">
            </div>
            <!--imagen 2-->
            <div class="item">
                <img src="fonts/design.jpg" alt="diseño">
            </div>
            <!--imagen3-->
            <div class="item">
                <img src="fonts/lan.jpg" alt="lan">
            </div>
        </div>
    </div>
  </div>
</div>
<!--FORMULARIO-->
<div class="container" id="searchForm">
    <div class="col-sm-6 col-sm-offset-3" id="contenedor">
        <form method="POST" action="../Controller/class_peticion.php" id="formulario_registro">
    <!--PANEL-->
    <div class="panel-primary centering">
        <!--Encabezado del panel-->
        <div class="panel-heading">
            <div class="panel-title text-center">
                <img src="fonts/LOGO-UNESR.png" alt="unesr" class="img-responsive centering" id="unesr">
                <h3>SISTEMA DE INVENTARIO DE LA UNESR</h3>
            </div>
        </div>
        <!--Cuerpo del panel-->
        <div class="panel-body text-center">
            <!--Username-->
            <div class="form-group">
                <label for="nombre">Nombre de usuario</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce un nombre de usuario" required pattern="^\w{6,32}$" data-parsley-required-message="Obligatorio" data-parsley-pattern-message="Ingrese solo letras o números (Mínimo 6 caracteres)" data-parsley-trigger="change" >
            </div>
            <!--Correo-->
            <div class="form-group">
                <label for="correo">E-mail</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Introduce tu dirección de correo electrónico" required type="email" data-parsley-required-message="Obligatorio" data-parsley-trigger="change" data-parsley-type-message="Debe ser un email válido">
            </div>
            <!--Contraseña-->
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Introduce una contraseña" required  minlength="6" data-parsley-required-message="Obligatorio" data-parsley-minlength-message="Mínimo 6 caracteres" data-parsley-trigger="change">
            </div>
            <!--Confirmación de Contraseña-->
            <div class="form-group">
                <label for="contrasena2">Confirmar contraseña</label>
                <input type="password" class="form-control" name="contrasena2" id="contrasena2" placeholder="Confirma la contraseña" required  minlength="6" data-parsley-equalto="#contrasena" data-parsley-required-message="Obligatorio" data-parsley-minlength-message="Mínimo 6 caracteres" data-parsley-equalto-message="Ambas contraseñas deben coincidir" data-parsley-trigger="change">
            </div>
        </div>
        <!--Final del panel-->
        <div class="panel-footer-inverse text-center">
            <button type="submit" name="registrar" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Borrar</button>
        </div>
    </div>
    </form>
    </div>
</div>
<!--CONTACTO-->
<div class="page-header text-center hidden-xs hidden-sm" id="contacto">
    <h2>CONTACTO</h2>
</div>
<div class="row">
    <!--ULISES-->
    <div class="col-md-6 col-md-offset-3 hidden-xs hidden-sm">
        <div class="thumbnail">
            <img src="fonts/thumb_ulises.jpg" class="img-circle" alt="Ulises">
            <div class="caption text-justify">
                <blockquote>
                    <p><cite>"Ética y disciplina"</cite></p>
                    <footer>Ulises Vargas</footer>
                </blockquote>
                <p class="text-center">DESARROLLADOR WEB FRONTEND</p>
                <p class="text-center">Caracas-Venezuela</p>
                <div class="text-center">
                <p class="text-center">¡Sígueme en mis redes sociales!</p><br>
                  <!--CONTENEDOR BOTONES-->
                  <div class="row text-center">
                  <!--BOTONES-->
                  <div class="col-md-4 hidden-xs hidden-sm">
                    <a href="https://www.facebook.com/nico.rou.37" class="btn btn-default btn-lg" id="facebook"><i class="fa fa-facebook" aria-hidden="true" style="font-size: 48pt"></i></a>
                  </div>
                  <div class="col-md-4 hidden-xs hidden-sm">
                    <a href="https://twitter.com/texanico" class="btn btn-default btn-lg" id="twitter"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 48pt"></i></a>
                  </div>
                  <div class="col-md-4 hidden-xs hidden-sm">
                    <a href="https://ve.linkedin.com/in/ulises-vargas-de-sousa-b9b352117" class="btn btn-default btn-lg" id="linkedin"><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 48pt"></i></a>
                  </div>
                  </div><br>
                <!--BOTONES-->
        </div>
        <div class="text-center">
        <!--BOTON IR ARRIBA-->
        <a href="#carrusel" role="button"><span class="glyphicon glyphicon-chevron-up text-center hidden-xs hidden-sm" aria-hidden="true" id="scrolltop"></span></a>
        </div>
    </div>
</div>
<!--SCRIPTS-->
<script src="js/jquery-2.2.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script src="js/parsley.min.js"></script>
<!--BOTON ARRIBA SCRIPT-->
<script src="js/ir_arriba.js"></script>
<!--PARSLEY PARA LAS ENTRADAS-->
<script>
  $(document).ready(function(){
    var parsleyOptions = {
     errorClass: 'has-error',
     successClass: 'has-success',
     classHandler: function(ParsleyField) {
         return ParsleyField.$element.parents('.form-group');
     },
     errorsContainer: function(ParsleyField) {
         return ParsleyField.$element.parents('.form-group');
     },
     errorsWrapper: '<span class="parsleyBlock">',
     errorTemplate: '<div></div>'
  };

  $('#formulario_registro').parsley( parsleyOptions );

  });
</script>
</body>
</html>
