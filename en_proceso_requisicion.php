<?php
if (isset($_GET['folio']) && !empty($_GET['folio'])) {
    $folio = $_GET['folio'];
//    echo $folio;
//    die();
}
$id_pry = 1;
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

<!--   CONTENEDOR PRINCIPAL-->
<div class="container-fluid bg-body-light">
    <!--FILA UNO-->
    <?php
//             echo $folio;
//             die();   
    $registro = pg_query($conexion, "SELECT sc_requisicion_compra.id_requisicion_compra, fecha_elaboro_requisicion, id_empleado, 
                    id_area, id_proyecto, tipo_compra, periodicidad_requisicion, fecha_necesidad, folio_requisicion_compra FROM 
                    sc_requisicion_compra where folio_requisicion_compra = '$folio'");
//                print_r($registro);
//                die();
    if ($reg = pg_fetch_array($registro)) {
        ?>
        <div class="row pt-2"> 
            <!--CREAMOS COLUMNA UNO DE FILA UNO-->
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <table border="0">
    <!--                                <tr>
                                <td width="215">Fecha de solicitud</td>
                                <td width="400"><?php echo date("l, d/F/Y h:m:s "); ?><input name="fecha_requisicion" value="<?php echo date("d/M/Y h:m:s"); ?>" hidden>
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
            ya esta configurado, y este mismo formato vamos a utilizar para todos
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
                                //statement
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
                                if (empty($a)) {
//                                                echo 'a esta vacia';
                                } else {
//                                echo $reg['periodicidad_requisicion'];
//                                die();
                                    $perio = pg_query($conexion, "SELECT id_periodicidad, periodicidad_requisicion from sc_periodicidad_requisicion where id_periodicidad = '$a'");
                                    if ($periodicidad = pg_fetch_array($perio)) {
                                        echo "( " . $periodicidad['periodicidad_requisicion'] . " )";
                                        ?> 
                                    <?php } ?>

                                                                                                </td> 
                                                                                            </tr>
                                    <?php
                                }
                            }
                            ?>
                            <tr>
                                <td><label for="area">Fecha de necesidad</label></td> 
                                <td><input type="date" name="fecha_necesidad" value='<?php echo $reg['fecha_necesidad']; ?>' id="fecha_necesidad" class="form-control"/>
                            <?php
                            // $f = $reg['fecha_necesidad']; 
//                                    echo     $f;
//                                    die();
                            ?>
                                </td>
                            </tr>-->
                            <tr>
                                <td>Folio: </td>
                                <td class="d-none d-sm-table-cell"><a href="detalleRequisicion.php?folio=<?php echo $reg['folio_requisicion_compra']; ?>"><?php echo " " . $reg['folio_requisicion_compra']; ?></a> </td>
                                <td> <input id="folio_requisicion_compra" name="folio_requisicion_compra" value="<?php echo $reg['folio_requisicion_compra']; ?>" class="form-control input-group-sm" hidden>
                                </td>
                            </tr>
                        </table> 
                    </div>
                <?php }; ?>

            </div>
        </div>
    </div>
    <!--fila uno tabla de conceptos para cotizar-->
    <div class ="col-md-12">
        <div class="alert alertaCoti"> ***********************</div>
        <table class='table table-sm table-hover'>
            <thead class="table bg-light"> 
                <?php
                $detalles = pg_query($conexion, "SELECT id_requisicion_compra FROM 
                    sc_requisicion_compra where folio_requisicion_compra = '$folio' and proceso =1");
                if ($det = pg_fetch_array($detalles)) {
                    ?>
                    <tr>
                        <th scope="col"> # .</th>
                        <th scope="col">Conceptos</th>
                        <!--<th scope="col">Medida</th>-->
                        <th scope="col">Cantidad</th>
                        <th scope="col" class="bg-success">Precio1</th>
                        <th scope="col" class="bg-warning">Observación</th>
                        <th scope="col" class="bg-success">Precio2</th>
                        <th scope="col" class="bg-warning">Observación</th>
                        <th scope="col" class="bg-success">Precio3</th>
                        <th scope="col" class="bg-warning">Observación</th>
                        <!--<th scope="col">Detalles</th>-->
                        <th scope="col"></th>      
                    </tr>
                <?php } ?>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $detall = pg_query($conexion, "SELECT id_requisicion_compra, concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, observacion1, observacion2, observacion3, status FROM 
                    sc_requisicion_compra where folio_requisicion_compra = '$folio' and proceso =1");
//                    print_r($detall);
//                die();
                while ($det = pg_fetch_array($detall)) {
                    $i++;
                    ?>
                    <tr class="row<?php echo $det['id_requisicion_compra']; ?>">
                        <th scope="col"><?php echo $i?></th>
                        <th scope="row"><?php echo $det['concepto_solicitado'] ?></th>
                        <td class="cantidad"><?php echo $det['cantidad'] ?></td>
                        <td class="colprecio1"><?php echo "$" . $det['precio1'] ?></td>
                        <?php // $imp1 = $det['precio1'] * $det['cantidad'] ?>
                        <th class="colobs1"></th>
                        <td class="colprecio2"><?php echo "$" . $det['precio2'] ?></td>
                        <?php // $imp2 = $det['precio2'] * $det['cantidad'] ?>
                        <th class="colobs2"></th>
                        <th class="colprecio3"><?php echo "$" . $det['precio3'] ?></th>
                        <?php // $imp3 = $det['precio3'] * $det['cantidad'] ?>
                        <th class="colobs3"></th>
                        <th></th>
                        <td> 
                            <button type="button" class="enviarId btn btn-success" data-toggle="modal" data-target=".bd-example-modal-xl" product ="<?php echo $det['id_requisicion_compra']; ?>">Cotizar</button>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <div class="col-12 bg-info-light text-right"> 
                <a href="en_proceso_requisicion.php?folio=<?php echo $reg['folio_requisicion_compra']; ?>"><button type="button" class="btn btn-rounded btn-info min-width-125 mb-10" data-toggle="tooltip" title="Calcular Importe">Calcular Importes</button></a><br>
        </div>
        <!--FILA DOS tabla de cotizados-->
        <div class="col-12">=================================================================================================================================
            <table class='table table-sm table-striped table-vcenter table-hover'>
                <thead class="thead-light">
                    <?php
                    $detalle = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso, observacion1, observacion2, observacion3 FROM 
                    sc_requisicion_compra where proceso = 2 and folio_requisicion_compra = '$folio'");
                    if ($det2 = pg_fetch_array($detalle)) {
                        ?>
                        <tr>
                            <th scope="col"> #  .</th>
                            <th scope="col">Concepto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">$Precio1</th>
                            <th scope="col" class="bg-info">$Importe1</th>
                            <th scope="col">Observación1</th>
                            <th scope="col">$Precio2</th>
                            <th scope="col" class="bg-info">$Importe2</th>
                            <th scope="col">Observación2</th>
                            <th scope="col">$Precio3</th>
                            <th scope="col" class="bg-info">$Importe3</th>
                            <th scope="col">Observación3</th>
                        </tr>
                    <?php } ?>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $detalles = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso, id_requisicion_compra, observacion1, observacion2, observacion3 FROM 
                    sc_requisicion_compra where proceso = 2 and status = 2 and folio_requisicion_compra = '$folio'");
                    while ($det = pg_fetch_array($detalles)) {
                        $i +=1;
                        ?>
                        <tr class="row<?php echo $det['id_requisicion_compra'] ?>">
                            <th scope="col"><?php echo $i;?> </th>
                            <th scope="row"><?php echo $det['concepto_solicitado'] ?></th>
                            <td><?php echo $det['cantidad'] ?></td>
                            <th><?php echo "$" . $det['precio1'] ?></th>
                            <?php $imp1 = $det['precio1'] * $det['cantidad'] ?>
                            <th class="bg bg-info-light"><?php echo "$" . $imp1 ?></th>
                            <td><?php echo $det['observacion1'] ?></td>
                            <th><?php echo "$" . $det['precio2'] ?></th>
                            <?php $imp2 = $det['precio2'] * $det['cantidad'] ?>
                            <th class="bg bg-info-light"><?php echo "$" . $imp2 ?></th>
                            <td><?php echo $det['observacion2'] ?></td>
                            <th><?php echo "$" . $det['precio3'] ?></th>
                            <?php $imp3 = $det['precio3'] * $det['cantidad'] ?>
                            <th class="bg bg-info-light"><?php echo "$" . $imp3 ?></th>
                            <td><?php echo $det['observacion3'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 
        <!--CREAMOS COLUMNA dOs DE FILA dos-->
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <a href="consultaCotizacion.php?folio=<?php echo $reg['folio_requisicion_compra']; ?>"><button type="button" class="btn btn-rounded btn-primary min-width-125 mb-10">Finalizar Cotización</button></a><br>
            </div>
        </div>
    </div>

    <!--Modal-->
    <div class="modal bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <!-- Header -->
                <form class="js-van" name="form_add_coti" id="form_add_coti" 
                      onsubmit=" event.preventDefault(); sentDataProduct();"
                      action="" method="post">
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700" href="index.php">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">Cotiza</span><span class="font-size-xl">ción</span>
                        </a>
                        <!--<br><input type="text" class="concepto" id="concepto" name="concepto">-->
                        <h2 class="concepto" id="concepto" name="concepto"></h2>
                        <h2 class="h4 font-w400 text-muted mb-0 cantidad" id="cantidad" name="cantidad"></h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <div class="row justify-content-center px-5">
                        <div class="col-4 col-sm-8 col-md-6 col-xl-4">PROVEEDOR 1
                            <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="precio1" name="precio1" autofocus>
                                        <label for="login-username">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="obser1" name="obser1">
                                        <label for="login-username">Observación</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-8 col-md-6 col-xl-4">PROVEEDOR 2
                            <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="precio2" name="precio2">
                                        <label for="login-username">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="obser2" name="obser2">
                                        <label for="login-username">Observación</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-sm-8 col-md-6 col-xl-4">PROVEEDOR 3
                            <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="precio3" name="precio3">
                                        <label for="login-username">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material floating">
                                        <input type="text" class="form-control" id="obser3" name="obser3">
                                        <label for="login-username">Observación</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row gutters-tiny">
                                <div class="col-6 mb-5">
                                    <input type="text" class="form-control fol" id="fol" name="fol" hidden>
                                    <input type="text" class="form-control id" id="ids" name="ids" hidden>
                                    <button type="button" name="add"  id="<?php echo $reg['id_requisicion_compra']; ?>" class=" form-control btn add_cot btn_new btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                        <i class="fa fa-plus mr-10"></i> Agregar
                                    </button>
                                </div>
                                <div class="col-sm-6 mb-5">
                                    <a class="btn btn-block btn-noborder btn-rounded btn-alt-danger btn-hero" onclick="closeModal();" data-dismiss="modal">
                                        <i class="fa fa-minus mr-10"></i> Cancelar

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Sign In Form -->
        </div>
    </div>
    <!-- END Page Content -->
</div>

<?php require 'inc/_global/views/page_end.php'; ?>

<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>
<?php $cb->get_js('js/plugins/slick/slick.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>

<script>
    $(document).ready(function () {
        //función para consultar la BDD e imprimir el concepto_solicitado y cantidad como encabezado del modal
        $('.enviarId').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('product');
            $.ajax({
                url: 'includes/consulta.php',
                type: 'POST',
                async: true,
                data: {
                    idp: id
                },
                success: function (response) {
                    if (response != 'ERROR ') {
                        var info = JSON.parse(response);
                        console.log(info);
                        $('.concepto').html(info.concepto_solicitado);
                        $('.cantidad').html(info.cantidad);
                        $('.fol').val(info.folio_requisicion_compra);
                        $('.id').val(info.id_requisicion_compra);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
        //funcion para enviar datos para modificar precios y observaciones
        $('.add_cot').click(function (e) {
            e.preventDefault();
            $.ajax({
                url: 'includes/cotizacion.php',
                type: 'POST',
                async: true,
                data: $('#form_add_coti').serialize(),
                success: function (response) {
                    if (response != 'ERROR ') {
//                        console.log(response);
                        closeModal();
                        $('.modal').modal('hide');
//  Aquí puedo mostrar un alert que no se modificaron los datos..
                        var info = JSON.parse(response);
                        $a = info.id;
//                        console.log(info);
                        $('.row' + $a + ' .colprecio1').html(info.precio1);
                        $('.row' + $a + ' .colprecio2').html(info.precio2);
                        $('.row' + $a + ' .colprecio3').html(info.precio3);
                        $('.row' + $a + ' .colobs1').html(info.o1);
                        $('.row' + $a + ' .colobs2').html(info.o2);
                        $('.row' + $a + ' .colobs3').html(info.o3);
                        $('.alertCoti').html('<p> Articulo Cotizado !!! </p>');

                    } else {
                        $('alertaCoti').html('<p> Error al cotizar </p>');
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
        //funcion para limpiar antes de cerrar
        $('.add_can').click(function (e) {
            e.preventDefault();
        });
    });
    //funcion para limpiar antes de cerrar y cerrar
    function closeModal() {

        $('#fol').val('');
        $('#ids').val('');
        $('#precio1').val('');
        $('#obser1').val('');
        $('#precio2').val('');
        $('#obser2').val('');
        $('#precio3').val('');
        $('#obser3').val('');
        $('.modal').fadeOut();
    }

</script>