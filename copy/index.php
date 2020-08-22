<?php
require 'inc/_global/config.php';
date_default_timezone_set('America/Mexico_City');
require 'inc/backend/config.php';
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
if (isset($_POST['crear'])) {
    $folio_requisicion_compra = $_POST['folio_requisicion_compra'];
} else {
    $folio_requisicion_compra = 'PCM00000010';
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
<!--        <div class="col-7">
            C:\xampp\htdocs\sistemaAllie\images\imgr\seguimientoycontrol.jpg
            <img src="images/imgr/seguimientoycontrol.jpg" class="img-thumbnail w-50 h-50" alt="RH"/>
            <h4>** Seguimiento y Control -- Hacer Requisición **</h4>
        </div>FIN DE LA COLUMNA UNO DE LA FILA UNO-->
        <!--CREAMOS COLUMNA DOS DE FILA UNO-->
        <div class="col-5">
            <form name="form1" method="post" action="includes/registro-requisicion.php">
                <table border="1">
                    <tr>
                        <td width="215">Fecha de Solicitud</td>

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
                    <tr>
                        <td>    </td>
                        <td><input class="btn btn-primary" type="submit" name="crear" id="crear" value="Siguiente" class="form-control btn-primary"></td>
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
                <article class="content">
                    <section>
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
                                <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="concepto" class="form-control" disabled></td>
                                <td><input type="text" name="medida" id="medida" placeholder="ej. Peiza" class="form-control" disabled></td>     
                                <td><input type="text" name="cantidad" id="cantidad" class="form-control" disabled></td>       
                                <td><input type="text" name="marca" id="marca" class="form-control" disabled></td>      
                                <td><input type="text" name="modelo" id="modelo" class="form-control" disabled></td>       
                                <td><input type="text" name="detalle" id="detalle" class="form-control" disabled></td>

                                <!--<td><input class="btn btn-primary" type="submit" name="agregar" id="enviar" value="Agregar" class="form-control btn-primary"></td>-->
                            </tr>
                        </table>
                    </section>
                </article>

            </div>
        </form>
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
