<?php

include_once 'conexion.php';
$conexion = Conexion::obtenerConexion();
if (isset($_POST)) {
    //bloque qué funciona caundo se envia de la página en_proceso_requisicion.php para hacer la modificación en la cotización
    if (isset($_POST['ids'])) {
//    print_r($_POST);exit;
        extract($_POST);
        $n;
        $cotizacionInsertado = false;
        $idst = $_POST['ids'];
        $impo1 = $can * $precio1;
        $impo2 = $can * $precio2;
        $impo3 = $can * $precio3;

        try {
            $sql = "UPDATE sc_requisicion_compra set precio1 =:precio1 , precio2 = :precio2, precio3 = :precio3,"
                    . "observacion1 = :obsr1, observacion2 = :obsr2 , observacion3 = :obsr3, proceso = 2, status = 2,"
                    . "importe1 = :importe1, importe2 = :importe2, importe3 = $impo3"
                    . "where id_requisicion_compra = :id_requisicion_compra";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':importe1', $impo1);
            $sentencia->bindParam(':importe2', $impo2);
            $sentencia->bindParam(':precio1', $precio1, PDO::PARAM_STR);
            $sentencia->bindParam(':precio2', $precio2, PDO::PARAM_STR);
            $sentencia->bindParam(':precio3', $precio3, PDO::PARAM_STR);
            $sentencia->bindParam(':id_requisicion_compra', $ids, PDO::PARAM_STR);
            $sentencia->bindParam(':obsr1', $obser1, PDO::PARAM_STR);
            $sentencia->bindParam(':obsr2', $obser2, PDO::PARAM_STR);
            $sentencia->bindParam(':obsr3', $obser3, PDO::PARAM_STR);

            $cotizacionInsertado = $sentencia->execute();
            $cotizacionInsertado = true; //true
            $data['id'] = $idst;
            $data['precio1'] = $precio1;
            $data['precio2'] = $precio2;
            $data['precio3'] = $precio3;
            $data['o1'] = $obser1;
            $data['o2'] = $obser2;
            $data['o3'] = $obser3;
            $data['i1'] = $impo1;
            $data['i2'] = $impo2;
            $data['i3'] = $impo3;
            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit;
        } catch (PDOException $ex) {
            print "ERROR " . $ex->getMessage();
            die();
        }
        return $cotizacionInsertado;
    }
    // Bloque qué funciona cuando se envia de la página en_proceso_requisicion.php para hacer la consulta y colocarlo en el modal
    if (isset($_POST['idp'])) {
        //    print_r($_POST); exit;
        $n;
        $id = $_POST['idp'];
        try {
            $sql = "select id_requisicion_compra, folio_requisicion_compra, concepto_solicitado, medida, cantidad, marca, modelo, detalle"
                    . " from sc_requisicion_compra WHERE  id_requisicion_compra = $id";
            foreach ($conexion->query($sql) as $row) {
                $n = $row;
            }
            Conexion::cerrarConexion();
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

