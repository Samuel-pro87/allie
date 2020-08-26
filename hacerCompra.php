<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass-inverse';
$cb->l_sidebar_inverse = true;
$cb->l_sidebar_mini = true;
?>
<?php // require 'inc/_global/views/head_start.php';            ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php
require 'inc/_global/views/page_start.php';
if ($_POST['folio']) {
    $folio = $_POST['folio'];
//    print_r($folio);
//    die();
}
require_once 'includes/conexion.php';
require_once 'includes/Config.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
$detalles = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso, id_requisicion_compra, observacion1, observacion2, observacion3 FROM 
                    sc_requisicion_compra where proceso = 2  and status = 2 and folio_requisicion_compra = '$folio'");
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
            <div class="col-md-6"> <h3 class="text-center">Comprar</h3>
                <div class="row">
                    <table class='table table-sm table-striped table-vcenter table-hover'>
                        <thead class="thead-light">
                            <?php
                            $detalle = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso FROM 
                    sc_requisicion_compra where proceso = 2 and status = 2 and folio_requisicion_compra = '$folio'");
                            if ($det2 = pg_fetch_array($detalle)) {
                                ?>
                                <tr class="text-primary-darker">
                                    <td scope="col"  style="width: 15%;"></td>
                                    <td scope="col">Concepto</td>
                                    <td scope="col">Cantidad</td>
                                    <td scope="col">$Precio1</td>
                                    <td scope="col">$Importe1</td>
    <!--                                    <td scope="col">Observación1</td>
                                    <td scope="col">$Precio2</td>
                                    <td scope="col">$Importe2</td>
                                    <td scope="col">Observación2</td>
                                    <td scope="col">$Precio3</td>
                                    <td scope="col">$Importe3</td>
                                    <td scope="col">Observación3</td>-->
                                </tr>
                            <?php } ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($det = pg_fetch_array($detalles)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <a class=" form-control btn add_cot btn_new btn-block btn-hero btn-noborder btn-rounded btn-alt-danger" href="includes/edit_requisicion.php?idC=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Comprar</a>
                                        <!--<a href="includes/delete_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Quitar</a>-->
                                    </th>
                                    <td><?php echo $det['concepto_solicitado'] ?></td>
                                    <td><?php echo $det['cantidad'] ?></td>
                                    <td><?php echo "$" . $det['precio1'] ?></td>
                                    <?php $imp1 = $det['precio1'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp1 ?></td>
    <!--                                    <td><?php echo $det['observacion1'] ?></td>
                                    <td><?php echo "$" . $det['precio2'] ?></td>
                                    <?php $imp2 = $det['precio2'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp2 ?></td>
                                    <td><?php echo $det['observacion2'] ?></td>
                                    <td><?php echo "$" . $det['precio3'] ?></td>
                                    <?php $imp3 = $det['precio3'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp3 ?></td>
                                    <td><?php echo $det['observacion3'] ?></td>-->
                                </tr>
                                <tr>
                                    <?php $sum = $det['precio3'] * $det['cantidad']; ?>                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6"> <h3 class="text-center">Orden de Compra <?php echo $folio ?></h3>
                <div class="row">
                    <table class='table table-sm table-striped table-vcenter table-hover'>
                        <thead class="thead-light">
                            <?php
                            $detalle = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, status, proceso FROM 
                    sc_requisicion_compra where proceso = 3 and status = 4 and folio_requisicion_compra = '$folio'");
                            if ($det2 = pg_fetch_array($detalle)) {
                                ?>
                                <tr class="text-primary-darker">
                                    <td scope="col"  style="width: 15%;"></td>
                                    <td scope="col">Concepto</td>
                                    <td scope="col">Cantidad</td>
                                    <td scope="col">$Precio1</td>
                                    <td scope="col">$Importe1</td>
    <!--                                    <td scope="col">Observación1</td>
                                    <td scope="col">$Precio2</td>
                                    <td scope="col">$Importe2</td>
                                    <td scope="col">Observación2</td>
                                    <td scope="col">$Precio3</td>
                                    <td scope="col">$Importe3</td>
                                    <td scope="col">Observación3</td>-->
                                </tr>
                            <?php } ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($det = pg_fetch_array($detalles)) {
                                ?>
                                <tr>
                                    <th scope="row">
                                        <a class=" form-control btn add_cot btn_new btn-block btn-hero btn-noborder btn-rounded btn-alt-danger" href="includes/edit_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Comprar</a>
                                        <!--<a href="includes/delete_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Quitar</a>-->
                                    </th>
                                    <td><?php echo $det['concepto_solicitado'] ?></td>
                                    <td><?php echo $det['cantidad'] ?></td>
                                    <td><?php echo "$" . $det['precio1'] ?></td>
                                    <?php $imp1 = $det['precio1'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp1 ?></td>
    <!--                                    <td><?php echo $det['observacion1'] ?></td>
                                    <td><?php echo "$" . $det['precio2'] ?></td>
                                    <?php $imp2 = $det['precio2'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp2 ?></td>
                                    <td><?php echo $det['observacion2'] ?></td>
                                    <td><?php echo "$" . $det['precio3'] ?></td>
                                    <?php $imp3 = $det['precio3'] * $det['cantidad'] ?>
                                    <td><?php echo "$" . $imp3 ?></td>
                                    <td><?php echo $det['observacion3'] ?></td>-->
                                </tr>
                                <tr>
                                    <?php $sum = $det['precio3'] * $det['cantidad']; ?>                                    
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
                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        Sub-Total:
                    </div>
                    <div class="col-sm-6 col-xl-3  bg-success text-body-color-dark">
                        <?php echo "$ " . $sum; ?>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row items-push-2x text-sm-left border-3x border-danger">
                    <div class="col-sm-6 col-xl-4 text-right">

                    </div>
                    <div class="col-sm-6 col-xl-2">             
                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        16 % IVA:
                    </div>
                    <div class="col-sm-6 col-xl-3 bg-gd-sun text-body-color-dark">
                        <?php
                        $iva = 0.16 * $sum;
                        echo $iva;
                        ?>
                    </div>
                </div>
            </div>
            <div class="block-content">
                <div class="row items-push-2x text-sm-left border-3x border-danger ">
                    <div class="col-sm-6 col-xl-4 text-right">

                    </div>
                    <div class="col-sm-6 col-xl-2">

                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                        Total :
                    </div>
                    <div class="col-sm-6 col-xl-3 bg-gd-dusk text-body-color-dark">
                        <?php
                        echo "$ ";
                        $total = $iva + $sum;
                        echo $total;
                        ?>
                    </div>
                </div>

            </div>
            <div class="block-content">
                <div class="row items-push-2x text-sm-left border-3x border-danger">
                    <div class="col-sm-6 col-xl-4 text-right">
                       
                    </div>
                    <div class="col-sm-6 col-xl-2">             
                    </div>
                    <div class="col-sm-6 col-xl-3 text-right">
                       Proveedor :
                    </div>
                    <div class="col-sm-6 col-xl-3">
                         <form action="ordenCompra.php" method="post">
                             <input name="folio" id="folio" value="<?php echo $folio ?>" hidden>
                            <select name="id_proyecto" id="sc_proyecto" class="form-control" onchange="mostrarPrefijo()">
                                <?php
                                $registro = pg_query($conexion, "SELECT id_registro, razon_social FROM sc_alta_proveedor order by id_registro");
                                while ($reg = pg_fetch_array($registro)) {
//                                    $id_pry = $reg['id_proyecto'];
//                                    echo $id_pry;
//                                    die();
                                    ?>
                                    <option value=" <?php echo $reg['id_registro'] ?>">
                                        <?php
                                        echo $reg['razon_social'];
//                                        $id_pry = $reg['id_proyecto']
                                        ?>
                                    </option>   
                                <?php } ?>  
                            </select>
                             <br>
                             <br>
                            <button type="submit" class="btn btn-outline-info min-width-125" data-toggle="click-ripple">Terminar Orden de Compra</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Rounded -->
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


