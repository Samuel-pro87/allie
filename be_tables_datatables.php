<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/datatables/dataTables.bootstrap4.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Nuevas</h2>

    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Puedes chekar tus  <small>Requisiciones</small></h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Usuario</th>
                        <th class="d-none d-sm-table-cell">Folio</th>
                        <th class="d-none d-sm-table-cell">Proyecto</th>
                        <th class="d-none text-center d-sm-table-cell" style="width: 10%;">Status</th>
                        <th class="d-none text-center d-sm-table-cell" style="width: 23%;">Detalles de lo solicitado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i < 7; $i++) { ?>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="font-w600"><a href="#"><?php $cb->get_name(); ?></a></td>
                        <td class="d-none d-sm-table-cell">Folio <?php echo $i; ?> </td>
                        <td class="d-none d-sm-table-cell">proyecto <?php echo $i; ?> -</td>
                        <td class="d-none text-center d-sm-table-cell">
                            <?php $cb->get_tag(); ?>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="ver más"> +
<!--                                <i class="fa fa-user"></i>-->
                            </button>
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