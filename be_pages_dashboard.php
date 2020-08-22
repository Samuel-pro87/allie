<?php
require 'inc/_global/config.php';
date_default_timezone_set('America/Mexico_City');
require 'inc/backend/config.php';
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<body>
    <!--   CONTENEDOR PRINCIPAL-->
    <div class="container-fluid">
        <!--FILA UNO-->
        <div class="row pt-2">   

            <!--CREAMOS COLUMNA UNO DE FILA UNO-->
            <div class="col-7">
                <h2>** Seguimiento y Control ** </h2>
            </div><!--FIN DE LA COLUMNA UNO DE LA FILA UNO-->

            <!--CREAMOS COLUMNA DOS DE FILA UNO-->
            <div class="col-5 container-fluid">
                <a href="..\Phploggin\PhpLoggin.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Crear Requisición</span> </a>

            </div><!--FIN DE LA COLUMNA DOS DE LA FILA UNO-->
        </div><!-- FIN FILA UNO-->

        <!--FILA DOS-->
        <div class="row">   
            <!--COLUMNA UNO FILA DOS-->
            <div class="col-4">

                <!--            //Espacio utilizado para agregar el formulario para dar de alta a una requisición
                <div class="row badge-dark justify-content-center"> <h5>   
                                </h5></div>-->

            </div> <!--COLUMNA DOS FILA DOS-->
            <div class="col-8">
                <div class="row justify-content-center text-primary bg-ligth">   
                    <img src="images/imgr/seguimiento-y-controlindex.jpg" class="img-thumbnail w-50 h-50">
                </div>
                <div class="row justify-content-center">   
                     <!--<a href="..\Phploggin\PhpLoggin.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Crear Requisición</span> </a>-->
                    <!--<a href="..\Phploggin\PhpLoggin.php" class="img-fluid"><span class="badge badge-pill badge-primary"> Crear Requisición</span> </a>-->
                </div>
                <!--<img src="images/imgr/logo.jpg" class="img-thumbnail w-100 h-75" alt="RH"/>-->

            </div>
        </div> <!-- FIN FILA DOS-->
        <!--FILA TRES-->
        <div class="row">   
            <!--<p> Selecciona IDIOMA ====  <a href="#">Ingles</a> ====  <a href="#">Portugues</a></p>-->

        </div> <!-- FIN FILA TRES-->

    </div><!-- FIN DEL CONTENEDOR PRINCIPAL-->
</body>

<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>



