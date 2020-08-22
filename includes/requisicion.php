<?php
class requisicion{
    private $folio_requisicion_compra;
    private $id_empleado;


    public function __construct($folio_requisicion_compra, $id_empleado) { //El orden de los campos debe ser el mismo al de la tabla origen
        
        $this->folio_requisicion_compra = $folio_requisicion_compra; 
        $this->id_empleado = $id_empleado;
    }
    
    public function obtenerFolio_requisicion_compra() {
        return $this->folio_requisicion_compra;
    }
        public function obtenerIdEmpleado() {
        return $this->id_empleado;
    }
     
    public function log($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }
}
?>

