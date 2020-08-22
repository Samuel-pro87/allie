<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">  Requisiciones <small>sin revisar</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Folio</th>
                        <th class="d-none d-sm-table-cell">Usuario</th>
                        <th class="d-none d-sm-table-cell">Proyecto</th>
                        <th class="d-none text-center d-sm-table-cell" style="width: 10%;">Estatus</th>
                        <th class="d-none text-center d-sm-table-cell" style="width: 23%;">Detalles de lo solicitado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $detalles = pg_query($conexion, "SELECT folio_requisicion_compra, status,
                        id_empleado, id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad 
                    FROM sc_requisicion_compraheader where status =2 and level = 1");
//                print_r($detalles);
//                die();
                    $i = 0;
                    while ($det = pg_fetch_array($detalles)) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $i += 1; ?></td>
                            <td class="d-none d-sm-table-cell"><a href="detalleRequisicion.php?folio=<?php echo $det['folio_requisicion_compra'] ;?>"><?php echo $det['folio_requisicion_compra'] ;?></a> </td>
                            <td class="font-w600"><a href="#"><?php
//                                    echo $det['id_empleado'];
                                  $a = $det['id_empleado'];
//                                echo $reg['id_area'];
//                                die();
                                        $datosE = pg_query($conexion, "SELECT id_empleado, nombre, apellido_paterno, apellido_materno  from rh_datos_personales where id_empleado = '$a'");
                                        if ($empleado = pg_fetch_array($datosE)) {
                                           
                                                echo $empleado['nombre'] . " ";
                                                echo $empleado['apellido_paterno'] . " ";
                                                echo $empleado['apellido_materno'];
                                            }
                                            ?></a></td>
                            
                            <td class="d-none d-sm-table-cell">
                                <?php
                                        $a = $det['id_proyecto'];
//                                echo $reg['id_area'];
//                                die();
                                        $pro = pg_query($conexion, "SELECT id_proyecto, proyecto, acronimo_proyecto from sc_proyecto where id_proyecto = '$a'");
                                        if ($proyecto = pg_fetch_array($pro)) {
                                            echo $proyecto['proyecto'] . "( ";
                                        echo $proyecto['acronimo_proyecto'] . " )";}
                                            ?>
                            </td>
                            <td class="d-none text-center d-sm-table-cell">
                         <?php $cb->get_tag(); ?>
                            </td>
                            <td class="text-center">
                                <!--<a href="en_proceso_requisicion.php?folio=<?php echo $reg['folio_requisicion_compra'];?>"><button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10" data-toggle="tooltip" title="terminar solicitud">Enviar</button></a><br>-->
                                <a href="includes/addRequisicion.php?fol=<?php echo $det['folio_requisicion_compra'] ?>"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="ver detalles"> 
                                    <i class="fa fa-chain-broken"></i>
                                </button></a>
                            </td>
                        </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full Pagination -->

</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_tables_datatables.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>