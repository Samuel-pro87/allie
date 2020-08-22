<?php
require 'inc/_global/config.php';
date_default_timezone_set('America/Mexico_City');
?>
<?php require 'inc/backend/config.php'; ?>
<?php
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
if(isset($_GET['folio']) && !empty($_GET['folio'])){
//    $folio =$_POST['folio_requisicion_compra'];
    $folio = $_GET['folio'];
//    echo $folio;
//    die();
}
?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid">
    <!--FILA UNO-->
    <div class="row pt-2"> 
        <!--CREAMOS COLUMNA UNO DE FILA UNO-->
        <!--CREAMOS COLUMNA DOS DE FILA UNO-->
        <div class="col-5">
            <form name="form1" method="post" action="includes/registro-requisicion.php">
                <?php
//                SELECT sc_requisicion_compra.id_requisicion_compra, fecha_elaboro_requisicion, id_empleado,
//id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad, folio_requisicion_compra FROM
//sc_requisicion_compra where folio_requisicion_compra = 'PMC00000002';
                
                
                $registro = pg_query($conexion, "SELECT sc_requisicion_compra.id_requisicion_compra, fecha_elaboro_requisicion, id_empleado, 
                    id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad, folio_requisicion_compra FROM 
                    sc_requisicion_compra where folio_requisicion_compra = '$folio'");
//                print_r($registro);
//                die();

                if ($reg = pg_fetch_array($registro)) {
                    ?>
                    <table border="1">
                        <tr>
                            <td width="215">Fecha de Solicitud</td>

                            <td width="400"><input name="fecha_requisicion" value="<?php echo $reg['fecha_elaboro_requisicion'] ?>" class="form-control input-group-sm" hidden><?php echo $reg['fecha_elaboro_requisicion'] ?>
                        </tr>
                        <tr>
                            <td><label for="area">Fecha de necesidad</label></td> 
                            <td><input type="text" name="fecha_necesidad" id="fecha_necesidad" class="form-control" value="<?php echo $reg['fecha_necesidad'] ?>" hidden/><?php echo $reg['fecha_necesidad'] ?></td></tr>
                        <tr>
                            <td>Folio </td>
                            <td> 
                                <input name="folio_requisicion_compra" id="generar_folio" class="form-control" hidden value="
                                <?php
                                echo $folio;
                                ?>"/>     
                                       <?php
                                       echo $folio;
                                   }
                                   ?>
                        </td>
                    </tr>
                </table>  
            </form>
        </div>

        <!--FIN DE LA COLUMNA DOS DE LA FILA UNO-->
    </div>
    <div class="row">   
        <!--COLUMNA UNO FILA DOS-->
        <form name="form1" method="post" action="includes/registro-requisicion.php">
            <div class="col-12">
                <!--//Espacio utilizado para agregar el formulario para dar de alta a una requisición-->
                <h2>Detalles de lo solicitado</h2>
                <table border="1">
                    <tr><td><label for="area">Concepto :</label></td>
<!--                            <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="medida" class="form-control" required></td>-->
                        <td><label for="area">Medida :</label></td>
                        <!--<td><input type="text" name="medida" id="medida2" placeholder="ej. Peiza" class="form-control"></td>-->     
                        <td><label for="area">Cantidad :</label></td>
                        <!--<td><input type="text" name="cantidad" id="marca" class="form-control" required></td>-->       
                        <td><label for="area">Marca :</label></td>
                        <!--<td><input type="text" name="marca" id="modelo2" class="form-control"></td>-->      
                        <td><label for="area">Modelo :</label></td>
                        <!--<td><input type="text" name="modelo" id="modelo" class="form-control"></td>-->       
                        <td><label for="area">Detalles :</label></td>
<!--                            <td><input type="text" name="detalle" id="modelo" class="form-control"></td>-->
                    </tr>
                    <?php
                    $registro = pg_query($conexion, "SELECT * FROM sc_requisicion_compra where folio_requisicion_compra = 'PCM00000002'");
                    while ($regt = pg_fetch_array($registro)) {
//                          print_r($regt);
//                          die();
                        ?>
                        <tr>                   
                            <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="medida" class="form-control" value="<?php echo $regt['concept_solicitado'] ?>"><?php echo $regt['concepto_solicitado'] ?></td>
                            <td><input type="text" name="medida" id="medida2" placeholder="ej. Peiza" class="form-control" value="<?php echo $regt['medida'] ?>"><?php echo $regt['medida'] ?></td>     
                            <td><input type="text" name="cantidad" id="marca" class="form-control" value="<?php echo $regt['cantidad'] ?>"><?php echo $regt['cantidad'] ?></td>       
                            <td><input type="text" name="marca" id="modelo2" class="form-control" value="<?php echo $regt['marca'] ?>"><?php echo $regt['marca'] ?></td>      
                            <td><input type="text" name="modelo" id="modelo" class="form-control" value="<?php echo $regt['modelo'] ?>"><?php echo $regt['modelo'] ?></td>       
                            <td><input type="text" name="detalle" id="modelo" class="form-control" value="<?php echo $regt['detalle'] ?>"><?php echo $regt['detalle'] ?></td>

                            <td><input class="btn btn-primary" type="submit" name="agregar" id="enviar" value="Agregar" class="form-control btn-primary"></td>
                        </tr>
                        <?php }
                    ?>
                </table>
            </div>
        </form>
    </div>
    <!-- END Page Content -->

    <?php require 'inc/_global/views/page_end.php'; ?>

    <?php require 'inc/_global/views/footer_start.php'; ?>

    <!-- Page JS Plugins -->
    <?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
    <?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

    <!-- Page JS Code -->
    <div class="container-fluid">
    <!--FILA UNO-->
    <div class="row pt-2"> 

        <form name="form1" method="post" action="includes/registro-requisicion.php">
            <div class="col-5">
                <div class="col-12">
                    <div class="">   Fecha de Solicitud
                    </div>
                    <div class="">   <?php echo date("l, d/F/Y h:m:s "); ?><input name="fecha_requisicion" value="<?php echo date("d/M/Y h:m:s"); ?>" hidden>
                    </div>
                </div>
                <table border="1">
                    <tr>
                        <td width="215">f</td>

                        <td width="400"><?php echo date("l, d/F/Y h:m:s "); ?><input name="fecha_requisicion" value="<?php echo date("d/M/Y h:m:s"); ?>" hidden>
                    </tr>
                    <tr>
                        <td>Solicitante</td>
                        <td> <?php
                            $registro = pg_query($conexion, "SELECT * FROM rh_datos_personales where curp = 'Devr871119hcsrld02'");
                            while ($reg = pg_fetch_array($registro)) {
                                ?>
                                <input name="usuario" id="id_usuario" class="form-control" hidden value=" <?php echo $reg['id_empleado'] ?>"
                                       />   
                                       <?php
                                       echo ($reg['nombre'] . " " . $reg['apellido_paterno'] . " " . $reg['apellido_materno']);
                                   }
                                   ?>
                        </td>
                    </tr>
                    <tr>
                        <!--ya esta configurado, y este mismo formato vamos a utilizar para todos-->
                        <td><label for="area">Área</label></td>
                        <td>
                            <select name="id_area" id="rh_area" class="form-control" required>
                                <?php
                                $registro = pg_query($conexion, "SELECT * FROM rh_area");
                                while ($reg = pg_fetch_array($registro)) {
                                    ?>
                                    <option value=" <?php echo $reg['id_area'] ?>">
                                        <?php echo $reg['area']; ?>
                                    </option>   
                                <?php } ?>  
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="area">Proyecto</label></td>
                        <td>
                            <select name="id_proyecto" id="sc_proyecto" class="form-control" required>
                                <?php
                                $registro = pg_query($conexion, "SELECT * FROM sc_proyecto order by id_proyecto");
                                while ($reg = pg_fetch_array($registro)) {
                                    ?>
                                    <option value=" <?php echo $reg['id_proyecto'] ?>">
                                        <?php echo $reg['proyecto']; ?>
                                    </option>   
                                <?php } ?>  
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="area">Tipo de compra</label></td>
                        <td>
                            <label>Unica
                                <input type="radio" name="tipo_compra" value="1" id="tipo_compra_0">
                            </label>
                            <label>Recurrente
                                <input type="radio" name="tipo_compra" value="2" id="tipo_compra_1">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="area">Periodicidad</label></td>
                        <td>
                            <select name="id_periodicidad" id="sc_proyecto" class="form-control" required>
                                <?php
                                $registro = pg_query($conexion, "SELECT * FROM sc_periodicidad_requisicion");
                                while ($reg = pg_fetch_array($registro)) {
                                    ?>
                                    <option value=" <?php echo $reg['id_periodicidad'] ?>">
                                        <?php echo $reg['periodicidad_requisicion']; ?>
                                    </option>   
                                <?php } ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="area">Fecha de necesidad</label></td> 
                        <td><input type="date" name="fecha_necesidad" id="fecha_necesidad" class="form-control"/></td></tr>
                    <tr>
                        <td>Folio </td>
                        <td> <?php
                            $registro = pg_query($conexion, "SELECT * FROM sc_proyecto where id_proyecto = '1'");
                            while ($reg = pg_fetch_array($registro)) {
                                ?>
                                <input name="folio_requisicion_compra" id="generar_folio" class="form-control" hidden value="
                                <?php
                                $folio_requisicion_compra = ($reg['acronimo_proyecto'] . "00000002");
                                echo $folio_requisicion_compra;
                                ?>"/>     
                                       <?php
                                       echo $folio_requisicion_compra;
                                   }
                                   ?>
                        </td>
                    </tr>
                </table>  
            </div>
            <!--<form name="form1" method="post" action="includes/registro-requisicion.php">-->
            <div class="col-12">
                <!--//Espacio utilizado para agregar el formulario para dar de alta a una requisición-->
                <h2>Detalles de lo solicitado</h2>
                <table border="1">
                    <tr><td><label for="area">Concepto :</label></td>
<!--                            <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="medida" class="form-control" required></td>-->
                        <td><label for="area">Medida :</label></td>
                        <!--<td><input type="text" name="medida" id="medida2" placeholder="ej. Peiza" class="form-control"></td>-->     
                        <td><label for="area">Cantidad :</label></td>
                        <!--<td><input type="text" name="cantidad" id="marca" class="form-control" required></td>-->       
                        <td><label for="area">Marca :</label></td>
                        <!--<td><input type="text" name="marca" id="modelo2" class="form-control"></td>-->      
                        <td><label for="area">Modelo :</label></td>
                        <!--<td><input type="text" name="modelo" id="modelo" class="form-control"></td>-->       
                        <td><label for="area">Detalles :</label></td>
<!--                            <td><input type="text" name="detalle" id="modelo" class="form-control"></td>-->
                    </tr>
                    <tr>                   
                        <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="concepto" class="form-control"></td>
                        <td><input type="text" name="medida" id="medida" placeholder="ej. Peiza" class="form-control"></td>     
                        <td><input type="text" name="cantidad" id="cantidad" class="form-control"></td>       
                        <td><input type="text" name="marca" id="marca" class="form-control"></td>      
                        <td><input type="text" name="modelo" id="modelo" class="form-control"></td>       
                        <td><input type="text" name="detalle" id="detalle" class="form-control"></td>

                                <td><input class="btn btn-primary" type="submit" name="agregar" id="enviar" value="Agregar" class="form-control btn-primary"></td>
                    </tr>
                </table>
                <div class="col-12 container-fluid center-block">   
                    <div class="col-5">

                    </div>
<!--                    <div class="col-2">
                        <input type="submit" name="agregar" id="enviar" value="Agregar" class="btn btn-success form-control">
                    </div>-->
                    <div class="col-5">

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
    
    <?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

    <?php require 'inc/_global/views/footer_end.php'; ?>
