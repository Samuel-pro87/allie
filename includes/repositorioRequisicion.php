<?php

class repositorioRequisicion {

    private static $conexion = null;
    private static $n;

    //crear requisición
    public static function crearRequisicion($conexion, $_post) {
        $fec_necedidad = ($_POST['fecha_necesidad']);
        $requisicionCreada = false;
        $env = null;
        $fol = $_POST['folio_requisicion_compra'];
        $cleanFolio = ltrim($fol, " ");
//        print_r($_POST);
//echo $cleanFolio;
//die();
        $f = explode("-", $fec_necedidad);
        $fecha_sql = $f[2] . "-" . $f[1] . "-" . $f[0];
        
//echo $fecha_sql;
//die();
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO sc_requisicion_compraheader (folio_requisicion_compra, fecha_elaboro_requisicion, id_empleado, id_area, id_proyecto,"
                        . "tipo_compra, periodicidad_requisicion, fecha_necesidad, status, level) "
                        . "values (:folio_requisicion_compra,:fecha_elaboro_requisicion, :id_empleado, :id_area, :id_proyecto, :tipo_compra ,"
                        . ":periodicidad_requisicion, :fecha_necesidad, :status ,1)";

                $sentencia = $conexion->prepare($sql);
                extract($_POST);

                $sentencia->bindParam(':folio_requisicion_compra', $cleanFolio);
                $sentencia->bindParam(':fecha_elaboro_requisicion', $fecha_requisicion, PDO::PARAM_STR);
                $sentencia->bindParam(':id_empleado', $usuario, PDO::PARAM_STR);
                $sentencia->bindParam(':id_area', $id_area, PDO::PARAM_STR);
                $sentencia->bindParam(':id_proyecto', $id_proyecto, PDO::PARAM_STR);
                $sentencia->bindParam(':tipo_compra', $tipo_compra, PDO::PARAM_STR);
                $sentencia->bindParam(':periodicidad_requisicion', $id_periodicidad, PDO::PARAM_STR);
                $sentencia->bindParam(':fecha_necesidad', $fecha_sql);
                if ($_post['crear'] == "Crear") {
                    $env = 1;
                    $sentencia->bindParam(':status', $env);
                }
                $requisicionCreada = $sentencia->execute();

                $requisicionCreada = true; //true
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $requisicionCreada; //true or false
    }

    //insertar requisición
    public static function insertarRequisicion($conexion, $_post) {
        $fec_necedidad = ($_POST['fecha_necesidad']);
        $requisicionInsertado = false;
        $env = null;
        $fol = $_POST['folio_requisicion_compra'];
        $cleanFolio = ltrim($fol, " ");

        $f = explode("/", $fec_necedidad);
        $fecha_sql = $f[2] . "-" . $f[1] . "-" . $f[0];

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO sc_requisicion_compra (folio_requisicion_compra, medida, cantidad, marca, modelo, detalle, status, concepto_solicitado, proceso) "
                        . "values (:folio_requisicion_compra, :medida, :cantidad , :marca, :modelo, :detalle, :status, :concepto_solicitado, 1)";

                $sentencia = $conexion->prepare($sql);
                extract($_POST);

                $sentencia->bindParam(':folio_requisicion_compra', $cleanFolio);
                $sentencia->bindParam(':medida', $medida, PDO::PARAM_STR);
                $sentencia->bindParam(':cantidad', $cantidad, PDO::PARAM_STR);
                $sentencia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentencia->bindParam(':modelo', $modelo, PDO::PARAM_STR);
                $sentencia->bindParam(':detalle', $detalle, PDO::PARAM_STR);
                if ($_post['crear'] == "Crear") {
                    $env = 1;
                    $sentencia->bindParam(':status', $env);
                }
//                print_r($enviar);
//                echo $cleanFolio;
//                die();
                $sentencia->bindParam(':concepto_solicitado', $concepto_solicitado, PDO::PARAM_STR);

                $requisicionInsertado = $sentencia->execute();

                $requisicionInsertado = true; //true
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $requisicionInsertado; //true or false
    }

    //add una requisicion
    public static function addRequisicion($conexion, $_post) {
        $requisicionAdd = false;
        $env = null;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO sc_requisicion_compra (folio_requisicion_compra, medida, cantidad, marca, modelo, detalle, status, concepto_solicitado, proceso) "
                        . "values (:folio_requisicion_compra, :medida, :cantidad , :marca, :modelo, :detalle, :status, :concepto_solicitado, 1)";

                $sentencia = $conexion->prepare($sql);
                extract($_POST);

                $sentencia->bindParam(':folio_requisicion_compra', $folio_requisicion_compra, PDO::PARAM_STR);
                $sentencia->bindParam(':medida', $medida, PDO::PARAM_STR);
                $sentencia->bindParam(':cantidad', $cantidad, PDO::PARAM_INT);
                $sentencia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentencia->bindParam(':modelo', $modelo, PDO::PARAM_STR);
                $sentencia->bindParam(':detalle', $detalle, PDO::PARAM_STR);
                if ($_post['agregar'] == "Agregar") {
                    $env = 1;
                    $sentencia->bindParam(':status', $env);
                }
//                print_r($enviar);
//                echo $env;
//                die();
                $sentencia->bindParam(':concepto_solicitado', $concepto_solicitado, PDO::PARAM_STR);

                $requisicionAdd = $sentencia->execute();

                $requisicionAdd = true; //true
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $requisicionAdd; //true or false
    }

    //insertar cotización
    public static function insertarCotizacion($conexion, $_post) {
        $cotizacionInsertado = false;
        $pro = 2;
        extract($_POST);
//        print_r($_post);
//        die();
        if (isset($conexion)) {
            try {
                $sql = "UPDATE sc_requisicion_compra set precio1 =:precio1 , precio2 = :precio2, precio3 = :precio3, proceso = $pro"
                        . "where id_requisicion_compra = :id_requisicion_compra";

                $sentencia = $conexion->prepare($sql);
                extract($_POST);
//                print_r($_post);
//                print_r($precio1);
//                die();
                $sentencia->bindParam(':precio1', $precio1, PDO::PARAM_STR);
                $sentencia->bindParam(':precio2', $precio2, PDO::PARAM_STR);
                $sentencia->bindParam(':precio3', $precio3, PDO::PARAM_STR);
                $sentencia->bindParam(':id_requisicion_compra', $id_requisicion, PDO::PARAM_STR);
//                print_r($Cotizar);
//                echo $pro;
//                die();
                $cotizacionInsertado = $sentencia->execute();

                $cotizacionInsertado = true; //true
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $cotizacionInsertado; //true or false
    }

    public static function obtenerRequisicionFolio($id, $conexion) {

        $requisicionNuevas = 0;
        if (isset($conexion)) {
            try {
                $sql = "select count (id_folio) from sc_requisicion_compraheader where level = 1 and status =1;";
                foreach ($conexion->query($sql) as $row) {
                    self::$n[] = $row;
                    $requisicionNuevas += 1;
                }
                return self::$n;
//                print_r(self::$n['concepto_solicitado']);
                Conexion::cerrarConexion();
//                die();
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $requisicionNuevas;
    }

    public static function curpExiste($curp, $conexion) {

        $curpExiste = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM acceso WHERE curp = ?";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(1, $curp, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $curpExiste = true;
                } else {
                    $curpExiste = false;
                }
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
            }
        }
        return $curpExiste;
    }

    //add status a dos (2).
    public static function addStatusRequisicion($conexion, $folio) {
        $cargado = false;
        if (isset($conexion)) {
            try {
                //altera la talamsc_requisicion_compraheader unicamente
                $sql = "UPDATE sc_requisicion_compraheader SET status = 2 WHERE folio_requisicion_compra = '$folio';";
                foreach ($conexion->query($sql) as $row) {
                    self::$n[] = $row;
                    $cargado = true;
                }
                return self::$n;
//                print_r(self::$n['concepto_solicitado']);
//                $requisicion += 1;
                Conexion::cerrarConexion();
//                die();
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $cargado;
    }

    //Quitar un concepto solicitado y cotizado antes de hacer la solicitud de autorización de compra. 
    public static function uppStatusRequisicion($conexion, $id) {
        $quitar = false;
        if (isset($conexion)) {
            try {
                //altera unicamente los campos de la tabla sc_requisicion_compra
                $sql = "UPDATE sc_requisicion_compra SET status = 3 WHERE id_requisicion_compra = $id;";
                foreach ($conexion->query($sql) as $row) {
                    self::$n[] = $row;
                    $quitar = true;
                }
                return self::$n;
//                print_r(self::$n['concepto_solicitado']);
//                $requisicion += 1;
                Conexion::cerrarConexion();
//                die();
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $quitar;
    }

    //add level a dos (2).
    public static function addLevelRequisicion($conexion, $folio) {
        $nextlevel = false;
        if (isset($conexion)) {
            try {

                $sql = "UPDATE sc_requisicion_compraheader SET level = 2 WHERE folio_requisicion_compra = '$folio';";
                foreach ($conexion->query($sql) as $row) {
                    self::$n[] = $row;
                    $nextlevel = true;
                }
                return self::$n;
//                print_r(self::$n['concepto_solicitado']);
//                $requisicion += 1;
                Conexion::cerrarConexion();
//                die();
            } catch (PDOException $ex) {
                print "ERROR " . $ex->getMessage();
                die();
            }
        }
        return $nextlevel;
    }

}

?>
