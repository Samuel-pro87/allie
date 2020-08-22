<?php
include_once 'conexion.php';
$conexion = Conexion::obtenerConexion();
if(isset($_POST)){
//    print_r($_POST);exit;
    $n;
    $cotizacionInsertado = false;
    $idst = $_POST['ids'];
    try {
                    $sql = "UPDATE sc_requisicion_compra set precio1 =:precio1 , precio2 = :precio2, precio3 = :precio3,"
                            . "observacion1 = :obsr1, observacion2 = :obsr2 , observacion3 = :obsr3, proceso = 2, status = 2 "
                            . "where id_requisicion_compra = :id_requisicion_compra";

                    $sentencia = $conexion->prepare($sql);
                    extract($_POST);

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
                        echo json_encode($data, JSON_UNESCAPED_UNICODE);
                        exit;
                        
                } catch (PDOException $ex) {
                    print "ERROR " . $ex->getMessage();
                    die();
                }
            return $cotizacionInsertado;
}
?>

