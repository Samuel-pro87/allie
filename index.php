<?php 
$conta = 0;
$cont;
require_once 'includes/conexion.php';
$conexion = Conexion::obtenerConexion();
  
        if (isset($conexion)) {
            try {
                $cont = current($conexion->query("select count(id_folio) from sc_requisicion_compraheader where level = 1 and status =2;")->fetch());
                $conta = $cont;
                } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        ?>
<html>
    <<head>
  <!--Cabeza-->
    </head>
    <body> <?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_m_content        = 'narrow';
$cb->l_header_fixed     = true;
$cb->l_header_style     = '';
$cb->l_sidebar_inverse  = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
  <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-6 col-xl-3">
            <a class="block block-link-pop text-right bg-primary" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
<!--                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-bar-chart fa-3x text-primary-light"></i>
                    </div>-->
                    <!--<div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="0">0%</div>-->
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Operaciones</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-pop text-right bg-earth" href="sc_menu.php">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="font-size-h3 font-w600 text-uppercase text-white">Seguimiento y Control</div>
                    <div class="font-size-sm font-w600  text-success"><span data-toggle="countTo" data-speed="100" data-to="<?php echo $conta ?>"></span> Nuevas</div>
                     <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-book-open fa-3x text-earth-light"></i>
                    </div>
        
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
<!--                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-envelope-letter fa-3x text-elegance-light"></i>
                    </div>-->
                    <!--<div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="25">0</div>-->
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Recursos Humanos</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-link-pop text-right bg-corporate" href="#">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
<!--                    <div class="float-left mt-10 d-none d-sm-block">
                        <i class="si si-fire fa-3x text-corporate-light"></i>
                    </div>-->
                    <!--<div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="1000">0</div>-->
                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Sistemas</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; 
Conexion::cerrarConexion();
?> 
        <!--Cuerpo-->

    </body>
</html>