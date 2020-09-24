<?php
require 'inc/_global/config.php';
date_default_timezone_set('America/Mexico_City');
require 'inc/backend/config.php';
require 'inc/_global/views/head_start.php';
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
//$id_pry = 0;
$tipo_compra = 0;
//$ran = 100;
//$c = (random_int(1, $ran));
//echo $c;
//die();
?>
<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/slick/slick.css'); ?>
<?php $cb->get_css('js/plugins/slick/slick-theme.css'); ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid"><h3 class="text-center">Crear Requisición</h3>
    <!--FILA UNO-->
    <form name="form1" method="post" action="includes/registro-requisicion.php">
        <div class="col-12">
            <div class="row pt-2"> 
                <table border="">
                    <tr>
                        <td width="215"  class="bg-gd-earth text-body-bg-light">Fecha de solicitud :</td>
                        <td width="400" class="form-control"><?php
                            $dia = date("l");
                            $d;
                            switch ($dia) {
                                case "Monday":
                                    $d = "Lunes";
                                    break;
                                case "Tuesday":
                                    $d = "Martes";
                                    break;
                                case "Wednesday":
                                    $d = "Miércoles";
                                    break;
                                case "Thursday":
                                    $d = "Jueves";
                                    break;
                                case "Friday":
                                    $d = "Viernes";
                                    break;
                                case "Sat  urday":
                                    $d = "Sabado";
                                    break;
                                case "Sunday":
                                    $d = "Domingo";
                                    break;
                                default:
                                    echo "no estas bien.. ";
                                    break;
                            }
                            echo $d . ", " . date("d/F/Y h:m:s ");
                            ?><input name="fecha_requisicion" value="<?php echo date("d/M/Y h:m:s"); ?>" hidden>
                    </tr>
                    <tr><th></th><th></th></tr>
                    <!--codigo para mostrar el usuario que esta haceindo el registro-->
                    <tr>
                        <td> <?php
                            $registro = pg_query($conexion, "SELECT * FROM rh_datos_personales where curp = 'Devr871119hcsrld02'");
                            while ($reg = pg_fetch_array($registro)) {
                                ?>
                                <input name="usuario" id="id_usuario" class="form-control" hidden value=" <?php echo $reg['id_empleado'] ?>"
                                       />   
                                       <?php
//                                       echo ($reg['nombre'] . " " . $reg['apellido_paterno'] . " " . $reg['apellido_materno']);
                                   }
                                   ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-gd-earth text-body-bg-light"><label for="area">Área</label></td>
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
                        <td class="bg-gd-earth text-body-bg-light"><label for="area">Proyecto</label></td>
                        <td>
                            <select name="id_proyecto" id="sc_proyecto" class="form-control" onclick="mostrarPrefijo()" onchange="mostrarPrefijo()">
                                <?php
                                $registro = pg_query($conexion, "SELECT id_proyecto, proyecto FROM sc_proyecto order by id_proyecto");
                                while ($reg = pg_fetch_array($registro)) {
//                                    $id_pry = $reg['id_proyecto'];
//                                    echo $id_pry;
//                                    die();
                                    ?>
                                    <option value=" <?php echo $reg['id_proyecto'] ?>">
                                        <?php
                                        echo $reg['proyecto'];
//                                        $id_pry = $reg['id_proyecto']
                                        ?>
                                    </option>   
                                <?php } ?>  
                            </select>
                            <?php // echo $id_pry; die();
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-gd-earth text-body-bg-light"><label for="area">Tipo de compra</label></td>
                        <td>
                            <div class="col-12 form-control">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input type="radio" name="tipo_compra" id="tipo_compra_1" value="1">
                                    <?php
                                    $tipo_compra = 1;
//                                echo $tipo_compra;
//                                die();
                                    ?>
                                    <label>Única</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input type="radio" name="tipo_compra" value="2" checked id="tipo_compra_2">
                                    <label>Recurrente</label>
                                    <?php
                                    $tipo_compra = 2;
//                                echo $tipo_compra;
//                                die();
                                    ?>
                                </div>
                            </div>
                        </td>
                    <div class="col-12">


                    </div>
                    <!-- Scripts -->
                    </tr>
                    <tr>
                        <td class="bg-gd-earth text-body-bg-light"><label id='lperio' for="area">Periodicidad</label></td>
                        <td>
                            <div id='perio'>
                                <select name="id_periodicidad" class="form-control" id="periodicidad">
                                    <?php
                                    $registro = pg_query($conexion, "SELECT id_periodicidad, periodicidad_requisicion FROM sc_periodicidad_requisicion");
                                    while ($reg = pg_fetch_array($registro)) {
                                        ?>
                                        <option value=" <?php echo $reg['id_periodicidad'] ?>">
                                            <?php echo $reg['periodicidad_requisicion']; ?>
                                        </option>   
                                    <?php } ?>  
                                </select>
                            </div>
                        </td>
                    </tr> 
                    <tr>
                        <td class="bg-gd-earth text-body-bg-light"><label for="area">Fecha de necesidad </label></td> 
                        <td>
                            <!--<input type="date" name="fecha_necesidad" id="calendar" class="form-control" required/>-->
                            <input type="text" id="fecha_necesidad" placeholder="dd/mm/yy" name="fecha_necesidad" class="js-flatpickr form-control bg-white fecha_necesidad" data-input required autocomplete="off"> 
                      <!--<input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">-->
                        </td></tr>
                    <tr>
                        <td class="bg-default-light text-body-bg-light">Folio :</td>

                        <?php
                        $con = conexion::obtenerConexion();
                        if (isset($con)) {
                            try {
                                $cont = current($con->query("select count(id_folio) from sc_requisicion_compraheader;")->fetch());
                                $c = $cont;
                            } catch (PDOException $ex) {
                                print "ERROR " . $ex->getMessage();
                                die();
                            }
                            ?>
                        <input type="text" id="numero" value="<?php echo $c; ?>" class="form-control" hidden>
                        <?php
                    }
                    ?>
                    <!--                         $registro = pg_query($conexion, "SELECT * FROM sc_proyecto order by id_proyecto");
                                                    while ($reg = pg_fetch_array($registro)) {-->
                    <td id="ppp">
                    </td>
                    </tr>
                </table>  
            </div>
        </div>
        <div class="col-12">
            <!--//Espacio utilizado para agregar el formulario para dar de alta a una requisición-->
            <h2>Detalles de lo solicitado</h2>
            <table border="0">
                <thead>
                    <tr class="table-info">
                        <th><label for="area">Concepto :</label></th>
                        <th><label for="area">Medida :</label></th>
                        <th><label for="area">Cantidad :</label></th>
                        <th><label for="area">Marca :</label></th>
                        <th><label for="area">Modelo :</label></th>
                        <th><label for="area">Detalles :</label></th>
                    </tr>
                </thead>  
                <tr>                   
                    <td><input type="text" placeholder="ej. Computadora" name="concepto_solicitado" id="concepto" class="form-control" required></td>
                    <td><input type="text" name="medida" id="medida" placeholder="ej. Peiza" class="form-control" required></td>     
                    <td><input type="text" name="cantidad" id="cantidad" class="form-control" required></td>       
                    <td><input type="text" name="marca" id="marca" class="form-control"></td>      
                    <td><input type="text" name="modelo" id="modelo" class="form-control"></td>       
                    <td><input type="text" name="detalle" id="detalle" class="form-control"></td>
                    <td><input type="submit" name="crear" id="enviar" value="Crear" class="btn btn-success form-control"></td>
                </tr>
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
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>
<?php require 'inc/_global/views/footer_end.php'; ?>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->

<!--Funciones--> 
<script>
    function mostrarPrefijo() {
        var id_proyecto = $("#sc_proyecto").val();
        var c = $("#numero").val();
        $.ajax({
            url: "obtenerPrefijo.php",
            data: {id_proyecto: id_proyecto,
                c: c},
            type: "POST",
            success: function (data) {
//             alert("id proyecto = "+id_proyecto);
                $("#ppp").html(data);
            }
        })
    }

    $(document).ready(function () {
        $("#tipo_compra_1").click(function () {
//            $("#periodicidad").attr("disabled", true);
            $("#perio").hide();
            $("#lperio").hide();
            $("#concepto").attr("disabled", false).focus();
        });
        $("#tipo_compra_2").click(function () {
//            $("#periodicidad").attr("disabled", false);
            $("#perio").show();
            $("#lperio").show();
        });
//                                    $("#datepicker").datepicker({
//                                        minDate: +8
//                                    });

    });
</script>
<!-- Page JS Plugins -->

<script>jQuery(function () {
//    Codebase.helpers(['flatpickr']); 
        $("input.fecha_necesidad").flatpickr({
//            altInput: true,
//        altFormat: "F j, Y",
            dateFormat: "d-m-Y",
            minDate: new Date().fp_incr(8)
        });
    });</script>
