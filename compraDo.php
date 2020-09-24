<?php
final class CompraHacer {

    function mostrar() {
        require_once 'includes/conexion.php';
        require_once 'includes/Config.php';
        $cadenaConexion = "host=" . NOMBRE_SERVIDOR . " dbname=" . BASE_DATOS . " user=" . USUARIO . " password=" . PASS;
        $conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: " . pg_last_error());
        $detalles = pg_query($conexion, "SELECT sc_requisicion_compra.folio_requisicion_compra, id_requisicion_compra, concepto_solicitado, medida, cantidad, marca, modelo, detalle,
                        precio1, precio2, precio3, proceso, importe1, importe2, importe3 
                        FROM sc_requisicion_compra, sc_requisicion_compraheader 
                        WHERE sc_requisicion_compra.proceso = 2 AND sc_requisicion_compra.status = 2 AND 
                        sc_requisicion_compra.folio_requisicion_compra = sc_requisicion_compraheader.folio_requisicion_compra
                        AND level = 4");
        $regresar = "";
        while ($det2 = pg_fetch_array($detalles)) {
            $folio = $det2['folio_requisicion_compra'];
            $id = $det2["id_requisicion_compra"];
            $concepto = $det2["concepto_solicitado"];
            $cantidad = $det2['cantidad'];
            $precio1 = $det2['precio1'];
            $importe1 = $det2['importe1'];
            $precio2 = $det2['precio2'];
            $importe2 = $det2['importe2'];
            $precio3 = $det2['precio3'];
            $importe3 = $det2['importe3'];
            $script = "onclick='seleccionar(this,$id)'";
            $regresar .= "<tr $script>";
//          $regresar .= "<td style='Display:none'><input type='checkbox' name='check' id='chk$id'> </td>";
            $regresar .= "<td class='text-center'><input type='checkbox' name='chek[]' value='trim($id)' id='chk$id'></td>";
            $regresar .= "<td>$concepto </td>";
            $regresar .= "<td>$cantidad </td>";
            $regresar .= "<td>$precio1 </td>";
            $regresar .= "<td>$importe1 </td>";
//            $regresar .= "<td>$precio2 </td>";
//            $regresar .= "<td>$importe2 </td>";
//            $regresar .= "<td>$precio3 </td>";
//            $regresar .= "<td>$importe3 </td>";
//            $regresar .= "<td><input type='text' value='$id' id='fol' name='fol'></td>";
            $regresar .= "</tr>";
        }
        return $regresar;
    }

}
?>