<?php
include_once 'conexion.php';
include_once 'requisicion.php';
include_once 'ValidadorRegistro_requisicion.php';

if (isset($_GET['id'])) {
//    $id = $_GET['id'];
//    echo $id;
//    print_r($_GET);
//    die();
    
    conexion::abrirConexion();
     $id = $_GET['id'];
    
    $delete_cotizacion = repositorioRequisicion::uppStatusRequisicion(conexion::obtenerConexion(), $id);
        if ($delete_cotizacion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $delete_cotizacion = null;

//        include_once '../updateRequisicion.php';
//        echo $folio;
//        die();
            $folio = $_GET['folio'];
            header("Location: ../consultaCotizacion.php?folio=$folio");
        } else {
            echo 'solo cuando tenga vacio los tres precios cotizados';
        }

}
 else {
//    echo 'no llego nada';
}
Conexion::cerrarConexion();
?>


