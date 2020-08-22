<!--hola soy la modificadora de precios... (-_-)-->
<?php
    include_once 'conexion.php';
    include_once 'cotizacion.php';
    include_once 'ValidadorRegistro_cotizacion.php';

if (isset($_GET['id'])) {
//    $folio = $_GET['folio_requisicion_compra'];
    $id = $_GET['id'];
    $precio1 = $_GET['precio1'];
//print    $folio." - ";
//echo $id." -* $ ";
//echo $precio1;
    $ob1 = $_GET['observacion1'];
    $pre2 = $_GET['precio2'];
    $ob2 = $_GET['observacion2'];
    $pre3 = $_GET['precio3'];
    $ob3 = $_GET['observacion3'];
//
//echo    "obser1 = ".$ob1. " precio2 = $".$pre2." obser2 = ".$ob2. " precio3 = $".$pre3." Obser3 = ".$ob3;
//print_r($_GET);
//die();
    $validador = null;
    conexion::abrirConexion();
//echo "<pre>";print_r($_POST);
//die();

    $obj = new validadorRegistro_cotizacion();
//print_r($_POST);
//die();

    $validador = $obj->validarDatos($_POST, Conexion::obtenerConexion());
//    echo "<pre>";
//    print_r($validador);
//    die();

    if ($validador["estatus"] == 1) {
        extract($_POST);
        $folio = $_POST['folio_requisicion_compra'];
        //    print_r($_POST);
        //echo    $folio;
        //    die();

        $cotizacion = new Cotizacion($folio);
//    print_r($cotizacion);
//    die();
        $insertar_cotizacion = repositorioRequisicion::insertarCotizacion(Conexion::obtenerConexion(), $_POST);
        if ($insertar_cotizacion) {//VACIA LA VARIABLE LOCAL $insertar_requisicion
            $insertar_cotizacion = null;

//        include_once '../updateRequisicion.php';
//        echo $folio;
//        die();
            header("Location: ../en_proceso_requisicion.php?folio=$folio");
        } else {
            echo 'solo cuando tenga vacio los tres precios cotizados';
        }
    } else {
        include_once '../Mensajes.php';
    }
} else {
    echo 'no llego nada';
}
Conexion::cerrarConexion();
?>



