<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php
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
if ($obj->mostrar()) {
    
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
                <img class="sm-img-bg" src="images/imgr/pegazus-logo.jpg"/>
                <ol>
                    <li>Elemento 1 </li>
                    <li>Elemento 2 </li>
                    <li>Elemento 3 </li>
                    <li>Elemento 4 </li>
                </ol>
                <button class="enviarId" id="test">Ejecutar</button>

            </div>
            <div id="e1" class="col-md-6"> <h3 class="text-center">Orden de Compra <?php // echo $folio   ?></h3>

            </div>
        </div>
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

<script>
    $(document).ready(function () {

        $('.enviarId').click(function (e) {
//            $('ol li:first').appendTo('ol:first');  //primero selecciono el objeto y despúes indico donde agregarlo
//            $('ol:first').append($('ol li:first')); // primero indico donde agregar el objeteo que se encuentra en la primer posicion de la lista

//            $('ol li:last').prependTo('ol:first');
//            $('ol:first').prepend($('ol li:last'));

//               $('ol li:first').insertAfter('#e1');  //inserta el objeto despues de (insertAfter)
//                $('#e1').after($('ol li:first'));

//              $('ol li:first').insertBefore('#e1');
//              $('#e1').before($('ol li:first'));

//            $('ol li:last').remove());

//clonar el objeto de jQuery
                var clon = $('ol li:first').clone();
//                var nuevo_e = $('<p>Hola Mundos </p>');
                $('#e1').append(clon)

        });
    });

</script>
