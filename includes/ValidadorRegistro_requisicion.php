<?php

include_once 'repositorioRequisicion.php';

class validadorRegistro_requisicion {

    private $folio_requisicion_compra;
    private $fecha_requisicion;
    private $usuario;
    private $id_area;
    private $id_proyecto;
    private $tipo_compra;
    private $fecha_necesidad;
    private $br;

    //public function _construct($CURP, $email, $id_empleado, $password1, $password2, $conexion) {
    public function extraerDatos($conexion, $_post) {
        extract($_POST);
        die();
    }
    
    public function validarDatos($_post, $conexion){
        $this->conexion = $conexion;
        $this->mensaje = "";
        $this->br = "<br/>";
        $this->estatus = 1;

        extract($_POST);
//        print_r($folio_requisicion_compra);        
//        die();
        if (!$this->variableIniciada($folio_requisicion_compra)) {
            $this->mensaje .= "Debes de crear una requisición." . $this->br;
            $this->estatus=0;
        }        
       
        return  array(
            "mensaje"=>$this->mensaje,
            "estatus"=>$this->estatus
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
