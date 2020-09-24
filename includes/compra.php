<?php
include_once 'conexion.php';
$conexion = Conexion::obtenerConexion();
if (isset($_POST)) {
    //bloque qué funciona caundo se envia de la página en_proceso_requisicion.php para hacer la modificación en la cotización
    if (isset($_POST['gCompra'])) {
//    print_r($_POST);
//    die();
        extract($_POST);
        $chekes = $_POST['chek'];
        $n;
//        print_r($chekes);
//        die();
        $compraEcha = false;
        for ($index = 0; $index < count($chekes); $index++) {
            try {
                $sql = "UPDATE sc_requisicion_compra SET status = 2, proceso = 4"
                        . "WHERE id_requisicion_compra = $chekes[$index]";
                $sentencia = $conexion->prepare($sql);
                $compraEcha = $sentencia->execute();
                $compraEcha = true; //true
             if($compraEcha){
                $n;
                try {
                    $sql = "SELECT folio_requisicion_compra"
                            . " FROM sc_requisicion_compra "
                            . "WHERE  id_requisicion_compra = $chekes[$index]";
                    foreach ($conexion->query($sql) as $row) {
                        $n[] = $row;
                    }
                    echo json_encode($n, JSON_UNESCAPED_UNICODE);
                    exit();
                } catch (PDOException $ex) {
                    print "ERROR " . $ex->getMessage();
                    die();
                }
             }
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $compraEcha;
    }
    // Bloque qué funciona cuando se envia de la página en_proceso_requisicion.php para hacer la consulta y colocarlo en el modal
    if (isset($_POST['hacerCompra'])) {
        //    print_r($_POST); exit;
        $n;
        $id = $_POST['hacerCompra'];
        try {
            $sql = "UPDATE sc_requisicion_compra SET status = 2, proceso = 4"
                        . "WHERE id_requisicion_compra = $id";
            foreach ($conexion->query($sql) as $row) {
                $n['id_r'] = $id;
            }
            Conexion::cerrarConexion();
//                return $n;
            echo json_encode($n, JSON_UNESCAPED_UNICODE);
        } catch (PDOException $ex) {
            print "ERROR " . $ex->getMessage();
            die();
        }
    }
    //Bloque qué se ejecuta cuando se envian las observaciones para realizar la compra de la pagina consulta_Cotizacion
    if (isset($_POST['folios'])) {
//    print_r($_POST);exit;
        extract($_POST);
        $ObservacionIn = false;
        $folio = $_POST['folios'];

        try {
            $sql3 = "UPDATE sc_requisicion_compraheader set observaciong_prov1 = :obsr1, observaciong_prov2 = :obsr2 , observaciong_prov3 = '$obsr3', level = 4, status = 1"
                    . "WHERE folio_requisicion_compra = '$folio'";

            $sentencia = $conexion->prepare($sql3);
            $sentencia->bindParam(':obsr1', $obsr1, PDO::PARAM_STR);
            $sentencia->bindParam(':obsr2', $obsr2, PDO::PARAM_STR);
//            $sentencia->bindParam(':obsr3', $obsr3, PDO::PARAM_STR);

            $ObservacionIn = $sentencia->execute();
            $ObservacionIn = true; //true
            $dat['id'] = $folio;
            $dat['o1'] = $obsr1;
            $dat['o2'] = $obsr2;
            $dat['o3'] = $obsr3;
//            echo json_encode($dat, JSON_UNESCAPED_UNICODE);
//            exit;
        } catch (PDOException $ex) {
            print "ERROR " . $ex->getMessage();
            die();
        }
        header('Location: ../hacerCompra.php');
        return $ObservacionIn;
    }
    //esto sucede en caso de no haber ningun dato por el método post enviado
} else {
    echo "no ha llegado nada en post";
}
?>


