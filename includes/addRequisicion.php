<?php
extract($_POST);
include_once 'conexion.php';
include_once 'requisicion.php';
include_once 'ValidadorRegistro_requisicion.php';

$validador = null;
conexion::abrirConexion();
//echo "<pre>";print_r($_POST);
//die();
if(isset($_GET['folio'])){
    $folio = $_GET['folio'];
//    print_r($folio);
//    die();
$nextLevelRequisicion = repositorioRequisicion::addStatusRequisicion(Conexion::obtenerConexion(), $folio);

        if ($nextLevelRequisicion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $nextLevelRequisicion = null;

            header('Location: ../sc_menu.php');
        } else {
            include_once '../Mensajes.php';
        }
}
if(isset($_GET['fol'])){
    $folio = $_GET['fol'];
//    print_r($folio);
//    die();
$nextLevelRequisicion = repositorioRequisicion::addLevelRequisicion(Conexion::obtenerConexion(), $folio);

        if ($nextLevelRequisicion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $nextLevelRequisicion = null;

            header('Location: ../en_proceso_requisicion.php?folio=' . $folio . '');
        } else {
            include_once '../Mensajes.php';
        }
}

$obj = new validadorRegistro_requisicion();
//print_r($_POST);
//die();
$validador = $obj->validarDatos($_POST, Conexion::obtenerConexion());
//echo "<pre>";print_r($validador);
//die();

if ($validador["estatus"] == 1) {
    extract($_POST);
    $folio = $_POST['folio_requisicion_compra'];
//    print_r($_POST);
//    die();
    $requisicion = new requisicion($_POST['folio_requisicion_compra'], $_POST['usuario']);
//    print_r($requisicion);
//    die();

 $insertar_requisicion = repositorioRequisicion::addRequisicion(Conexion::obtenerConexion(), $_POST);

        if ($insertar_requisicion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $insertar_requisicion = null;

            header('Location: ../nuevesito.php?folio=' . $folio . '');
        } else {
            include_once '../Mensajes.php';
        }
} else {
    echo $validador["mensaje"];
}
//secho json_encode($error);
Conexion::cerrarConexion();
?>


