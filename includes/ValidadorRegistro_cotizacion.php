<?php

include_once 'repositorioRequisicion.php';

class validadorRegistro_cotizacion {

    private $id_requisicion;
    private $precio1;
    private $precio2;
    private $precio3;
    private $br;

    //public function _construct($CURP, $email, $id_empleado, $password1, $password2, $conexion) {
    public function extraerDatos($conexion, $_post) {
//        extract($_POST);
//        die();
    }

    public function validarDatos($_post, $conexion) {
        $this->conexion = $conexion;
        $this->mensaje = "";
        $this->br = "<br/>";
        $this->estatus = 1;

        extract($_POST);
//        print_r($id_requisicion);        
//        die();
        if (!$this->variableIniciada($id)) {
            $this->mensaje .= "Debes de seleccionar un concepto solicitado" . $this->br;
            $this->estatus = 0;
        } else {
            if (!$this->variableIniciada($precio1) && !$this->variableIniciada($precio2) && !$this->variableIniciada($precio3)) {
                $this->mensaje .= "Debes ingresar por lo menos un precio para poder guardar la coti" . $this->br;
                $this->estatus = 0;
            }
            else{
//                echo    'vamos bien ';
            }
        }

        return array(
            "mensaje" => $this->mensaje,
            "estatus" => $this->estatus
        );
    }

    //INICIAR VARIABLES
    private function variableIniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    //GET VARIABLES
    public function obtenerCURP() {
        return $this->CURP;
    }

    public function obtenerEmail() {
        $this->email = $email;
        return $this->email;
    }

    public function obtenerid_empleado() {
        return $this->id_empleado;
    }

    public function registroValido() {
        if ($this->erroCURP === "" && $this->erroremail === "" && $this->errorid_empleado === "" && $this->errorPassword1 === "" && $this->errorPassword2 === "") {
            return true;
        } else {
            return false;
        }
    }

}

?>
