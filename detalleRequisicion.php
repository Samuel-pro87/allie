<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
date_default_timezone_set('America/Mexico_City');
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass-inverse';
$cb->l_sidebar_inverse = true;
$cb->l_sidebar_mini = true;
?>
<?php // require 'inc/_global/views/head_start.php';  ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php
require 'inc/_global/views/page_start.php';
if (isset($_GET['folio']) && !empty($_GET['folio'])) {
    $folio = $_GET['folio'];
}
if (isset($_POST) && !empty($_POST)) {
//    $folio = $_POST['folio'];
    print_r($_POST); exit;
}
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
?>

<!-- Hero -->
<!--<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">-->
<div class="bg-primary-dark-op">
    <div class="content content-top text-center overflow-hidden">
        <!--            <div class="pt-50 pb-20">
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                    </div>-->
    </div>
</div>
<!--</div>-->
<!-- END Hero -->

<!-- Page Content -->
<?php
$registro = pg_query($conexion, "SELECT fecha_elaboro_requisicion, id_empleado, 
                    id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad, folio_requisicion_compra FROM 
                    sc_requisicion_compraheader where folio_requisicion_compra = '$folio'");
//                print_r($registro);
//                die();
if ($reg = pg_fetch_array($registro)) {
    ?>
    <div class="row pt-2"> 
        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <div class="col-12 container">
            <div class="row">
                <div class="col-6 md pt-2 m-2">
                    <table border="1">
                        <tr>
                            <td width="215">Fecha de solicitud</td>
                            <td>
                        <input name="fecha_requisicion" class="form-control" value="<?php echo $reg['fecha_elaboro_requisicion']; ?>">
                        </td>
                        </tr>
                        <tr>
                            <td>    Solicitante: 
                                <input name="usuario" value="<?php echo $reg['id_empleado']; ?>" class="form-control input-group-sm" hidden>
                                <?php
                                $a = $reg['id_empleado'];
//                                echo $reg['id_area'];
//                                die();
                                $datosE = pg_query($conexion, "SELECT id_empleado, nombre, apellido_paterno, apellido_materno  from rh_datos_personales where id_empleado = '$a'");
                                if ($empleado = pg_fetch_array($datosE)) {
                                    ?><td><?php
                                        echo $empleado['nombre'] . " ";
                                        echo $empleado['apellido_paterno'] . " ";
                                        echo $empleado['apellido_materno'];
                                    }
                                    ?> 
                            </td>
                        </tr>
                        <tr>
                            <!--ya esta configurado, y este mismo formato vamos a utilizar para todos-->
                            <td><label for="area">Área</label></td>
                            <td>
                                <input name="id_area" value="<?php echo $reg['id_area']; ?>" class="form-control input-group-sm" hidden>
                                <input name="area" value="  <?php
                                $a = $reg['id_area'];
//                                echo $reg['id_area'];
//                                die();
                                $areaC = pg_query($conexion, "SELECT id_area, area from rh_area where id_area = '$a'");
                                if ($area = pg_fetch_array($areaC)) {
                                    echo $area['area']
                                    ?> 
    <?php } ?>" class="form-control input-group-sm">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="proyecto">Proyecto</label></td>
                            <td>
                                <input name="id_proyecto" value="<?php echo $reg['id_proyecto']; ?>" class="form-control input-group-sm" hidden>
                                <input name="proyecto" value="  <?php
                                $a = $reg['id_proyecto'];
//                                echo $reg['id_area'];
//                                die();
                                $pro = pg_query($conexion, "SELECT id_proyecto, proyecto, acronimo_proyecto from sc_proyecto where id_proyecto = '$a'");
                                if ($proyecto = pg_fetch_array($pro)) {
                                    echo $proyecto['proyecto'] . "( ";
                                    echo $proyecto['acronimo_proyecto'] . " )";
                                    ?> 
    <?php } ?>" class="form-control input-group-sm">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="area">Tipo de compra</label></td>
                            <td>
                                <input name="tipo_compra" value="<?php echo $reg['tipo_compra']; ?>" class="form-control input-group-sm" hidden>
                                <?php
                                $tipo = $reg['tipo_compra'];
                                if ($tipo == 1) {
                                    $tipo = "Unica";
                                    echo $tipo;
//                                            die();
                                } elseif ($tipo == 2) {
                                    $tipo = "Recurrente";
                                    echo $tipo;
//                                            die();
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                        if ($tipo == "Unica") {
                            
                        } else {
                            ?>
                            <tr>
                                <td>
                                    Periodicidad : 
                                    <input name="id_periodicidad" value="<?php echo $reg['periodicidad_requisicion']; ?>" class="form-control input-group-sm" hidden>
                                </td>
                                <td>
                                    <?php
                                    $a = $reg['periodicidad_requisicion'];
//                                echo $reg['id_area'];
//                                die();
                                    $perio = pg_query($conexion, "SELECT id_periodicidad, periodicidad_requisicion from sc_periodicidad_requisicion where id_periodicidad = '$a'");
                                    if ($periodicidad = pg_fetch_array($perio)) {
                                        echo "( " . $periodicidad['periodicidad_requisicion'] . " )";
                                        ?> 
        <?php } ?>

                                </td> 
                            </tr>
    <?php } ?>
                        <tr>
                            <td><label for="area">Fecha de necesidad</label></td> 
                            <td><input type="date" name="fecha_necesidad" value='<?php echo $reg['fecha_necesidad']; ?>' id="fecha_necesidad" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Folio </td>
                            <td> <input name="folio_requisicion_compra" value="<?php echo $reg['folio_requisicion_compra']; ?>" class="form-control input-group-sm" hidden><?php echo $reg['folio_requisicion_compra']; ?>
                            </td>
                        </tr>
                    </table> 
                </div>
<?php }; ?>
            <div class="col-6">
                <!-- Rounded -->
                <div class="block">
                    <!--        <div class="block-header block-header-default">
                                <h3 class="block-title">Rounded</h3>
                            </div>-->
                    <div class="block-content">
                        <div class="row items-push-2x text-center text-sm-left">
                            <div class="col-sm-6 col-xl-4">

                            </div>
                            <div class="col-sm-6 col-xl-4">

                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <!--<a href="sc_menu.php"><button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10">Enviar</button></a><br>-->
                            </div>
                        </div>
                        <div class="row items-push-2x text-center text-sm-left">
                            <div class="col-sm-6 col-xl-4">

                            </div>
                            <div class="col-sm-6 col-xl-4">

                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <a href="nueva_requisicion.php"><button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10" data-toggle="tooltip" title="Volver a consultas">Volver</button></a><br>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END Rounded -->
            </div>
        </div>
    </div>

</div>

<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>