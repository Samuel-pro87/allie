<?php

extract($_POST);
include_once 'conexion.php';
include_once 'requisicion.php';
include_once 'ValidadorRegistro_requisicion.php';

$validador = null;

conexion::abrirConexion();

$fol = $_POST['folio_requisicion_compra'];
$cleanFolio = ltrim($fol, " ");
//echo "<pre>";print_r($_POST);
//die();

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

    $crear_requisicion = repositorioRequisicion::crearRequisicion(Conexion::obtenerConexion(), $_POST);
//proveniente del formulario codigo.php
    if ($crear_requisicion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
        $crear_requisicion = null;
        
        $insertar_requisicion = repositorioRequisicion::insertarRequisicion(Conexion::obtenerConexion(), $_POST);

        if ($insertar_requisicion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $insertar_requisicion = null;
//  echo "llegando  a la variable para encabezado".$cleanFolio;
//                die();
            header('Location: ../nuevesito.php?folio='. $cleanFolio .'');
        } else {
            include_once '../Mensajes.php';
        }

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

