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
        <div class="row pt-2 justify-content-center">   <h2>** Módulo Usuario ** </h2>
        </div>
        <div class="content">
            <div class="row invisible" data-toggle="appear">
                <!-- Row #1 -->
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-earth-op" href="codigo.php">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <img src="images/imgr/seguimiento-y-controlindex.jpg" class="img-thumbnail w-50 h-50">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op"><br>Crear Requisición</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-success" href="op_error_500.php">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <img src="images/imgr/buscar.jpg" class="img-thumbnail w-50 h-50">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op"><br>Consultar Requisición</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-elegance-lighter" href="javascript:void(0)">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <img src="images/imgr/homologar.jpg" class="img-thumbnail w-50 h-50">
                            <div class="font-size-sm font-w600 text-uppercase text-white-op"><br>Homologar <br> Agrupar</div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-link-pop text-right bg-danger-light" href="#">
                        <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                            <i  ><img src="images/imgr/add.jpg" class="img-thumbnail w-25 h-25"></i>

                            <div class="font-size-sm font-w600 text-uppercase text-white-op"><br>Orden de Comra</div>
                        </div>
                    </a>
                </div>
                <!-- END Row #1 -->
            </div>
        </div>
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
