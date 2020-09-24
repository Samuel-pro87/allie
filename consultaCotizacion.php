<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass-inverse';
$cb->l_sidebar_inverse = true;
$cb->l_sidebar_mini = true;
?>
<?php // require 'inc/_global/views/head_start.php';                ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php
require 'inc/_global/views/page_start.php';
if ($_GET['folio']) {
    $folio = $_GET['folio'];
//    print_r($folio);
//    die();
}
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
$detalles = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso, id_requisicion_compra, observacion1, observacion2, observacion3,
                         importe1, importe2, importe3 FROM sc_requisicion_compra where proceso = 2  and status = 2 and folio_requisicion_compra = '$folio'");
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
<div class="col-md-12 mp-2">
    <div class="col-12 bg-light">
        <div class="row">
            <form class="form-control border-1px" action="" method="POST" id="form_showreq">
                <div class="col-12">
                    <div class="row">

                        <div class="col-sm-5 mb-5">
                            <i class="text-body-color-dark"> Aquí podras encontrar información acerca de los datos de tú requisición</i>
                        </div>
                        <!--                        <div class="col-sm-3 mb-5">
                                                    <button class="btn btn-block btn-noborder btn-rounded btn-alt-danger">
                                                        <i class="fa fa-eye mr-10"></i> <?php echo $folio ?>
                                                    </button>
                                                </div>-->
                        <div>   
                            <input type="text" name="folios_" id="folio_" hidden value="<?php echo $folio ?>"/>
                        </div>

                    </div>
                </div>
            </form>

            <div class="col-12">
                <!-- Rounded -->
                <div class="block">
                    <form  action="includes/cotizacion.php" name="observacionesCompra" id="observacionesCompra" class="js-van"
                           onload="e.preventeDefaul();" method="post">
                        <div class="block-header block-header-default">

                        </div>
                        <div class="block-content">
                            <div class="row items-push-2x text-sm-left border-3x border-danger">
                                <div class="col-sm-6 col-xl-3 text-center">
                                    <h3 class="block-title">Proponer proveedor</h3>
                                </div>
                                <div class="col-sm-6 col-xl-3 text-center custom-control custom-radio bg-corporate-lighter">
                                     <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio1" value="option1" checked>
                                    <label class="custom-control-label" for="example-inline-radio1">Option 1</label>
                                </div>
                                <div class="col-sm-6 col-xl-3 text-center custom-control custom-radio">
                                      <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio2" value="option2">
                                    <label class="custom-control-label" for="example-inline-radio2">Option 2</label>
                                </div>
                                <div class="col-sm-6 col-xl-3 text-center custom-control custom-radio bg-corporate-lighter">
                                     <input class="custom-control-input" type="radio" name="example-inline-radios" id="example-inline-radio3" value="option3">
                                    <label class="custom-control-label" for="example-inline-radio3">Option 3</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Rounded -->
            </div>
            <div class="col-md-12">
                <div class="row">
                    <table class='table table-sm table-striped table-vcenter table-hover'>
                        <thead class="thead-light">
                            <?php
                            $detalle = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso, importe1, importe2, importe3 FROM 
                    sc_requisicion_compra where proceso = 2 and status = 2 and folio_requisicion_compra = '$folio'");
                            if ($det2 = pg_fetch_array($detalle)) {
                                ?>
                                <tr class="text-primary-darker">
                                    <td scope="col"  style="width: 15%;"></td>
                                    <td scope="col">Concepto</td>
                                    <td scope="col">Cantidad</td>
                                    <td scope="col" class="bg-corporate-lighter">$Precio1</td>
                                    <td scope="col" class="bg-corporate-lighter">$Importe1</td>
                                    <td scope="col" class="bg-corporate-lighter">Observación1</td>
                                    <td scope="col">$Precio2</td>
                                    <td scope="col" >$Importe2</td>
                                    <td scope="col">Observación2</td>
                                    <td scope="col" class="bg-corporate-lighter">$Precio3</td>
                                    <td scope="col" class="bg-corporate-lighter">$Importe3</td>
                                    <td scope="col" class="bg-corporate-lighter">Observación3</td>
                                </tr>
                            <?php } ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($det = pg_fetch_array($detalles)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <a class=" form-control btn add_cot btn_new btn-block btn-hero btn-noborder btn-rounded btn-alt-danger" href="includes/delete_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Quitar</a>

                                    </th>
                                    <td><?php echo $det['concepto_solicitado'] ?></td>
                                    <td><?php echo $det['cantidad'] ?></td>
                                    <td class="bg-corporate-lighter"><?php echo "$" . $det['precio1'] ?></td>

                                    <td class="bg-corporate-lighter"><?php echo $det['importe1'] ?></td>
                                    <td class="bg-corporate-lighter"><?php echo $det['observacion1'] ?></td>
                                    <td><?php echo "$" . $det['precio2'] ?></td>

                                    <td><?php echo $det['importe2'] ?></td>
                                    <td><?php echo $det['observacion2'] ?></td>
                                    <td class="bg-corporate-lighter"><?php echo "$" . $det['precio3'] ?></td>

                                    <td class="bg-corporate-lighter"><?php echo $det['importe3'] ?></td>
                                    <td class="bg-corporate-lighter"><?php echo $det['observacion3'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
    <div class="col-12">
        <!-- Rounded -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">SubTotal</h3>
            </div>
            <div class="block-content">
                <div class="row items-push-2x text-sm-left border-3x border-danger">
                    <div class="col-sm-6 col-xl-4 text-right">

                    </div>
                    <div class="col-sm-6 col-xl-2">
                        <?PHP
                        $deta = pg_query($conexion, "SELECT sum(importe1) as im1, sum(importe2) as im2, sum(importe3) as im3
                         FROM sc_requisicion_compra where proceso = 2  and status = 2 and folio_requisicion_compra = '$folio' GROUP BY folio_requisicion_compra");
                        if ($det3 = pg_fetch_array($deta)) {
                            echo "$ " . $det3['im1'];
                            ?>
                        </div>
                        <div class="col-sm-6 col-xl-3 text-center">
                            <?php
                            echo "$ " . $det3['im2'];
                            ?>
                        </div>
                        <div class="col-sm-6 col-xl-3 text-center">
                            <?php
                            echo "$ " . $det3['im3'];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Rounded -->
    </div>
</div>

<div class="col-12">
    <!-- Rounded -->
    <div class="block">
        <form  action="includes/cotizacion.php" name="observacionesCompra" id="observacionesCompra" class="js-van"
               onload="e.preventeDefaul();" method="post">
            <div class="block-header block-header-default">
                <h3 class="block-title">Observación</h3> <input name="folios" id="folios" value="<?php echo $folio ?>" hidden>
            </div>
            <div class="block-content">
                <div class="row items-push-2x text-sm-left border-3x border-danger">
                    <div class="col-sm-6 col-xl-3 text-right">

                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        <textarea class="form-control" name="obsr1" id="obsr1" rows="3"></textarea>
                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        <textarea class="form-control" name="obsr2" id="obsr2" rows="3"></textarea>
                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        <textarea class="form-control" name="obsr3" id="obsr3" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-info min-width-125 add_obscot">Terminar Cotización</button>
            </div>
        </form>
    </div>
    <!-- END Rounded -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/chartjs/Chart.bundle.min.js'); ?>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_pages_dashboard.min.js'); ?>

<?php require 'inc/_global/views/footer_end.php'; ?>

<!--<script>
    $(document).ready(function () {
        //clase para enviar datos para modificar observaciones
        $('.add_obscot').click(function (e) {
//            e.preventDefault();
            $.ajax({
                url: 'includes/cotizacion.php',
                type: 'POST',
                async: true,
                data: $('#observacionesCompra').serialize(),
                success: function (response) {
                    if (response != 'ERROR ') {
//  Aquí puedo mostrar un alert que no se modificaron los datos..
                        var info = JSON.parse(response);
                        console.log(info);
                    } else {
//                        $('alertaCoti').html('<p> Error al cotizar </p>');
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });

        });
    });
</script>-->