<?php
require 'inc/_global/config.php';
date_default_timezone_set('America/Mexico_City');
require 'inc/backend/config.php';
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
if (isset($_GET['folio']) && !empty($_GET['folio'])) {
    $fol = $_GET['folio'];
        $folio = ltrim($fol, " ");
}
$id_pry = 1;
?>
<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>
<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid"><h3 class="text-center">Hacer Requisición</h3>
    <!--FILA UNO-->
    <form name="form1" method="post" action="includes/addRequisicion.php">
        <?php
        $registro = pg_query($conexion, "SELECT fecha_elaboro_requisicion, id_empleado, 
                    id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad, folio_requisicion_compra FROM 
                    sc_requisicion_compraheader where folio_requisicion_compra = '$folio'");

        if ($reg = pg_fetch_array($registro)) {
            ?>
            <div class="row pt-2"> 
                <!--CREAMOS COLUMNA UNO DE FILA UNO-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 md">
                            <input name="usuario" id="id_usuario" hidden class="form-control"value=" <?php echo $reg['id_empleado'] ?>"/>
                            <table border="1" class="bg-gd-lake table-responsive">
                                <tr>
                                    <td>Folio </td>
                                    <td> <input name="folio_requisicion_compra" value="<?php echo $reg['folio_requisicion_compra']; ?>" readonly class="form-control input-group-sm">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="215">Fecha de solicitud</td>
                                    <td width="400"><input name="fecha_requisicion" value="<?php echo date("d/M/Y h:m:s"); ?>" readonly class="form-control">
                                </tr>
                                <tr>
                                    <!--ya esta configurado, y este mismo formato vamos a utilizar para todos-->
                                    <td><label for="area">Área</label></td>
                                    <td>
                                        <input name="id_area" value="<?php echo $reg['id_area']; ?>" class="form-control input-group-sm" hidden>
                                        <input readonly name="area" value="  <?php
                                        $a = $reg['id_area'];
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
                                        <input name="proyecto" readonly value="  <?php
                                        $a = $reg['id_proyecto'];
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
                                            ?>
                                            <input class="form-control" readonly name="show_area" value="Unica">
                                            <?php
//                                            echo $tipo;
//                                            die();
                                        } elseif ($tipo == 2) {
                                            $tipo = "Recurrente";
                                            ?>
                                            <input class="form-control" name="show_area" value="Recurrente" readonly>
                                            <?php
//                                            die();
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                if ($tipo == "Unica") {
                                    ?>
                                <input name="name_periodicidad" value="1" hidden class="form-control hidden input-group-sm">
                                <?php
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
                                            $perio = pg_query($conexion, "SELECT id_periodicidad, periodicidad_requisicion from sc_periodicidad_requisicion where id_periodicidad = '$a'");
                                            if ($periodicidad = pg_fetch_array($perio)) {
                                                ?>
                                                <input name="name_periodicidad" readonly value="<?php echo $periodicidad['periodicidad_requisicion']; ?>" class="form-control input-group-sm">
                                            <?php } ?>

                                        </td> 
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td><label for="area">Fecha de necesidad</label></td> 
                                    <td><input type="text" name="fecha_necesidad" readonly value='<?php echo $reg['fecha_necesidad']; ?>' id="fecha_necesidad" class="form-control"/>
                                    </td>
                                </tr>
                            </table> 
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
        <!--FILA DOS-->
        <div class="col-12">
            <!--//Espacio utilizado para agregar el formulario para dar de alta a una requisición-->
            <h2>Detalles de lo solicitado</h2>
            <table border="0" class="table-hover">
                <thead class="table-info">
                <tr>
                    <th><label for="area" scope="col">#  .</label></th>
                    <th><label for="area" scope="col"> Concepto :</label></th>
                    <th><label for="area" scope="col">Medida :</label></th>
                    <th><label for="area" scope="col">Cantidad :</label></th>
                    <th><label for="area" scope="col">Marca :</label></th>
                    <th><label for="area" scope="col">Modelo :</label></th>
                    <th><label for="area" scope="col">Detalles :</label></th>
                </tr>
                </thead>
                <tr scope="row">                   
                    <td></td>
                    <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="concepto" class="form-control" autofocus required></td>
                    <td><input type="text" name="medida" id="medida" placeholder="ej. Peiza" class="form-control" required></td>     
                    <td><input type="text" name="cantidad" id="cantidad" class="form-control" required></td>       
                    <td><input type="text" name="marca" id="marca" class="form-control"></td>      
                    <td><input type="text" name="modelo" id="modelo" class="form-control"></td>       
                    <td><input type="text" name="detalle" id="detalle" class="form-control"></td>
                    <td><input type="submit" name="agregar" id="enviar" value="Agregar" class="btn btn-success form-control"></td>
                </tr>

                <?php
                $detalles = pg_query($conexion, "SELECT id_requisicion_compra, concepto_solicitado, medida, cantidad, marca, modelo, detalle, status FROM 
                    sc_requisicion_compra where folio_requisicion_compra = '$folio' order by id_requisicion_compra desc ");

                $i = 0;
                while ($det = pg_fetch_array($detalles)) {

                    $i += 1;
                    ?>
                    <tr class="table-hover text-center text-md-center bg-corporate-lighter">
                        <td><?php echo $i; ?> </td>
                        <td><?php echo $det['concepto_solicitado'] ?></td>
                        <td><?php echo $det['medida'] ?></td>
                        <td><?php echo $det['cantidad'] ?></td>
                        <td><?php echo $det['marca'] ?></td>
                        <td><?php echo $det['modelo'] ?></td>
                        <td><?php echo $det['detalle'] ?></td>
                        <td></td>

                    </tr>
                <?php } ?>
            </table>
        </div>
    </form>
    <div class="row pt-2"> 
        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <div class="col-12">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6 text-center">
                    <!-- Rounded -->
                    <div class="">
                        <div class="block-content">
                            <a href="includes/addRequisicion.php?folio=<?php echo $reg['folio_requisicion_compra'];?>"><button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10" data-toggle="tooltip" title="terminar solicitud">Enviar</button></a><br>
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
    <?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

    <!-- Page JS Code -->
    <?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>
    <?php require 'inc/_global/views/footer_end.php'; ?>