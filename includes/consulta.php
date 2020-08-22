<?php
include_once 'conexion.php';
$conexion = Conexion::obtenerConexion();
if(isset($_POST)){
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
//                return $n;
                echo json_encode($n, JSON_UNESCAPED_UNICODE);

            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
}
?>

