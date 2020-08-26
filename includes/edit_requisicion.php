<?php
include_once 'conexion.php';
include_once 'requisicion.php';
include_once 'ValidadorRegistro_requisicion.php';

if (isset($_GET['idC'])) {
//    $id = $_GET['id'];
//    echo $id;

    
    conexion::abrirConexion();
     $id = $_GET['idC'];
     $folio = $_GET['folio'];
    //    print_r($_GET);
//    die();
    $hacerCompra = repositorioRequisicion::hacerCompra(conexion::obtenerConexion(), $id, $folio);
        if ($hacerCompra) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $hacerCompra = null;

//        include_once '../updateRequisicion.php';
//        echo $folio;
//        die();
            header("Location: ../hacerCompra.php?folio=$folio");
        } else {
            echo 'solo cuando tenga vacio los tres precios cotizados';
        }

}
 else {
    echo 'no llego nada';
}
Conexion::cerrarConexion();
?>

