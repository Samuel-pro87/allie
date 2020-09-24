<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
require 'includes/conexion.php';
$cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
$sum =0;
// Codebase - Page specific configuration
$cb->l_header_fixed = true;
$cb->l_header_style = 'glass-inverse';
$cb->l_sidebar_inverse = true;
$cb->l_sidebar_mini = true;
?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php
require 'inc/_global/views/page_start.php';
require("compraDo.php");
$obj = new CompraHacer();
if($obj->mostrar()){
    
}
?>
<!-- Hero -->
<!--<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo $cb->assets_folder; ?>/media/photos/photo34@2x.jpg');">-->
<div class="bg-primary-dark-op">
    <div class="content content-top text-center overflow-hidden">
<!--                    <div class="pt-50 pb-20">
                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                    </div>-->
    </div>
</div>
<!--</div>-->
<!-- END Hero -->

<!-- Page Content -->
<div class="container col-md-12 mp-2">
    <div class="col-12 bg-light">
        <div class="row">
            <div class="col-md-6"> <h3 class="text-center">Comprar</h3>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal form_add_compra" method="">
                                <div class="form-group">
                                    <!--aqui vamos a crear la tabla desde el js-->
                                    <div class="table-responsive">
                                        <table class='table table-sm table-striped table-vcenter table-hover'>
                                            
                                            <thead class="thead-light">
                                            <th class="text-body-bg-dark bg-primary-dark-op text-center">Agregar?</th>
                                            <th scope="col">Concepto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">$Precio1</th>
                                            <th scope="col">$Importe1</th>
<!--                                            <th scope="col">$Precio2</th>
                                            <th scope="col">$Importe2</th>
                                            <th scope="col">$Precio3</th>
                                            <th scope="col">$Importe3</th>-->
                                            </thead>
                                            <tbody style="cursor: pointer">
                                                <!--bloque que se ejecuta y carga los datos a la tabla para poder seleccionar un elemento y convertirlo en parte de una compra nueva-->
                                                <?=$obj->mostrar(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-gruop">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button class="btn btn-info doShoping col-md-12" type="button" name="gCompra"> Guardar</button>

                                    </div>

                                </div>
                            </form>

                        </div>

                    </div>

<!--                    <table class='table table-sm table-striped table-vcenter table-hover'>
    <thead class="thead-light">
                    <?php
                    $detalle = pg_query($conexion, "SELECT concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, proceso 
                        FROM sc_requisicion_compra, sc_requisicion_compraheader 
                        where sc_requisicion_compra.proceso = 2 and sc_requisicion_compra.status = 2 and 
                        sc_requisicion_compra.folio_requisicion_compra = sc_requisicion_compraheader.folio_requisicion_compra
                        and level = 4");
                    if ($det2 = pg_fetch_array($detalle)) {
                        ?>
                                    <tr class="text-primary-darker">
                                        <td scope="col"  style="width: 15%;"></td>
                                        <td scope="col">Concepto</td>
                                        <td scope="col">Cantidad</td>
                                        <td scope="col">$Precio1</td>
                                        <td scope="col">$Importe1</td>
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
                                            <a href="includes/delete_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Quitar</a>
                                        </th>
                                        <td><?php echo $det['concepto_solicitado'] ?></td>
                                        <td><?php echo $det['cantidad'] ?></td>
                                        <td><?php echo "$" . $det['precio1'] ?></td>
                        <?php $imp1 = $det['precio1'] * $det['cantidad'] ?>
                                        <td><?php echo "$" . $imp1 ?></td>
                                            <td><?php echo $det['observacion1'] ?></td>
                                        <td><?php echo "$" . $det['precio2'] ?></td>
                        <?php $imp2 = $det['precio2'] * $det['cantidad'] ?>
                                        <td><?php echo "$" . $imp2 ?></td>
                                        <td><?php echo $det['observacion2'] ?></td>
                                        <td><?php echo "$" . $det['precio3'] ?></td>
                        <?php $imp3 = $det['precio3'] * $det['cantidad'] ?>
                                        <td><?php echo "$" . $imp3 ?></td>
                                        <td><?php echo $det['observacion3'] ?></td>
                                    </tr>
                                    <tr>
                        <?php $sum = $det['precio3'] * $det['cantidad']; ?>                                    
                                    </tr>
                    <?php } ?>
    </tbody>
</table>-->
                </div>
            </div>
            <div class="col-md-6"> <h3 class="text-center">Orden de Compra <?php // echo $folio ?></h3>
                <div class="row">
                    <table class='table table-sm table-striped table-vcenter table-hover'>
                        <thead class="thead-light">
                            <?php
                            $detall = pg_query($conexion, "SELECT sc_requisicion_compra.concepto_solicitado, sc_requisicion_compra.medida, 
					    sc_requisicion_compra.id_requisicion_compra,sc_requisicion_compra.cantidad, sc_requisicion_compra.marca, 
						sc_requisicion_compra.modelo, sc_requisicion_compra.detalle, sc_requisicion_compra.precio1, sc_requisicion_compra.status,
						sc_requisicion_compra.proceso, sc_requisicion_compra.importe1, sc_requisicion_compra.observacion1
                                     FROM sc_requisicion_compra, sc_requisicion_compraheader
                                     WHERE  sc_requisicion_compraheader.level = 4 and sc_requisicion_compraheader.status = 1 and sc_requisicion_compra.proceso = 4 and sc_requisicion_compra.status=2
                                     GROUP BY id_requisicion_compra");
//                            if ($detcompra1 = pg_fetch_array($detall)) {
                                ?>
                                <tr class="text-primary-darker">
                                    <td scope="col"  style="width: 8%;">Quitar</td>
                                    <td scope="col">Concepto</td>
                                    <td scope="col">Cantidad</td>
                                    <td scope="col">$Precio1</td>
                                    <td scope="col">$Importe1</td>
                                    <td scope="col">Observación1</td>
<!--                                    <td scope="col">$Precio2</td>
                                    <td scope="col">$Importe2</td>
                                    <td scope="col">Observación2</td>
                                    <td scope="col">$Precio3</td>
                                    <td scope="col">$Importe3</td>
                                    <td scope="col">Observación3</td>-->
                                </tr>
                            <?php // } ?>
                        </thead>
                        <tbody>
                            <?php
                            while ($detcompra = pg_fetch_array($detall)) {
                                $suma = pg_query($conexion, "SELECT sum(importe1) as sum
                                                            FROM sc_requisicion_compra 
                                                            WHERE proceso = 4 and status=2");
                                if($s = pg_fetch_array($suma)){
                                    $sum = $s['sum'];
                                }
                                ?>
                                <tr>
                                    <th scope="row" class="text-center">
                                        <!--<a class=" form-control btn add_cot btn_new btn-block btn-hero btn-noborder btn-rounded btn-alt-danger" href="includes/edit_requisicion.php?id=<?php echo $det['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>">Comprar</a>-->
                                        <a href="includes/delete_requisicion.php?id=<?php echo $detcompra['id_requisicion_compra'] ?>&folio=<?php echo $folio ?>"><i class="fa fa-minus mr-10"></i></a>
                                    </th>
                                    <td><?php echo $detcompra['concepto_solicitado'] ?></td>
                                    <td><?php echo $detcompra['cantidad'] ?></td>
                                    <td><?php echo "$" . $detcompra['precio1'] ?></td>
                                    <?php // $imp1 = $detcompra['precio1'] * $detcompra['cantidad'] ?>
                                    <td><?php echo "$" . $detcompra['importe1'] ?></td>
                                    <td><?php echo $detcompra['observacion1'] ?></td>
<!--                                    <td><?php // echo "$" . $det['precio2'] ?></td>
                                    <?php // $imp2 = $det['precio2'] * $det['cantidad'] ?>
                                    <td><?php // echo "$" . $imp2 ?></td>
                                    <td><?php // echo $det['observacion2'] ?></td>
                                    <td><?php // echo "$" . $det['precio3'] ?></td>
                                    <?php // $imp3 = $det['precio3'] * $det['cantidad'] ?>
                                    <td><?php // echo "$" . $imp3 ?></td>
                                    <td><?php // echo $det['observacion3'] ?></td>-->
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
                <h3 class="block-title">Detalles de la compra</h3>
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
                            <select name="id_proyecto" id="sc_proyecto" class="form-control" onchange="">
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


<script>
//    funcion para poder seleccionar el chekcbox de la tabla y asi enviarlo por metodo post en jQuery y modificarle su status en el level 4
    function seleccionar(tr,value) {
        $(function(){
            if ($("#chk"+value).attr("checked") == "checked") {
                $("#chk"+value).removeAttr("checked");
                $(tr).css("background-color", "#FFFFFF");
               
            } else {
                $("#chk"+value).attr("checked","true");
                $("#chk"+value).prop("checked","false");
                $(tr).css("background-color", "#BEDAE8");
                 var id = document.getElementById("fol").value;
                  $.ajax({
                url: 'includes/compra.php',
                type: 'POST',
                async: true,
                data: {
                    hacerCompra: id
                },
                success: function (response) {
                    if (response != 'ERROR ') {
                        var info = JSON.parse(response);
                        console.log(info.id_r);
//                        $('.concepto').html(info.concepto_solicitado);
//                        $('.cantidad').html(info.cantidad);
//                        $('#can').val(info.cantidad);
//                        $('.fol').val(info.folio_requisicion_compra);
//                        $('.id').val(info.id_requisicion_compra);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
            }
        })
    }
    function cambiarStatus(){
        $(function(){
           
        })
    }
 $(document).ready(function (){
 $('.doShoping').click(function (e){
//     e.preventeDefaul();
       $.ajax({
                url: 'includes/compra.php',
                type: 'POST',
                async: true,
                data: $('#form_add_compra').serialize(),
                success: function (response) {
                    if (response != 'ERROR ') {
//                        console.log(response);
                        closeModal();
                        $('.modal').modal('hide');
//  Aquí puedo mostrar un alert que no se modificaron los datos..
                        var info = JSON.parse(response);
//                        $a = info.id;
                        console.log(info);
//                        $('.row' + $a + ' .colprecio1').html(info.precio1);
//                        $('.row' + $a + ' .colprecio2').html(info.precio2);
//                        $('.row' + $a + ' .colprecio3').html(info.precio3);
//                        $('.row' + $a + ' .colobs1').html(info.o1);
//                        $('.row' + $a + ' .colobs2').html(info.o2);
//                        $('.row' + $a + ' .colobs3').html(info.o3);
//                        $('.row' + $a + ' .colimp1').html(info.i1);
//                        $('.row' + $a + ' .colimp2').html(info.i2);
//                        $('.row' + $a + ' .colimp3').html(info.i3);
//                        
//                        $('.alertCoti').html('<p> Articulo Cotizado !!! </p>');

                    } else {
                        $('alertaCoti').html('<p> Error al cotizar </p>');
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });     
 });
 });
</script>