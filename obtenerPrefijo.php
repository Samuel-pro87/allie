<?php
 include_once 'includes/conexion.php';
 $cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
    $id_proyec= $_POST['id_proyecto'];
    $c = $_POST['c'];
//        echo $id_proyec;
   
            $registro = pg_query($conexion, "SELECT acronimo_proyecto FROM sc_proyecto where id_proyecto =$id_proyec");
            if ($reg = pg_fetch_array($registro)) {
//                echo $reg['acronimo_proyecto'];
//                        die();
            ?>
                <input class="form-control" name="folio_requisicion_compra" value="
                <?php
                $c = $c += 1;
                $acr = $reg['acronimo_proyecto'];
                $folio_requisicion_compra = ($acr."0000000"."$c");
                echo $folio_requisicion_compra;
                ?>"/>     
          <?php }
    Conexion::cerrarConexion();
?>
