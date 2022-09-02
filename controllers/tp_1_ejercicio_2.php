<?php
class tp_1_ejercicio_2{
    
    public function visualizar_resultado ($datos){
        $total_horas = 0;
        if (isset($datos['lunes_hs'])) {
        if ($datos['lunes_hs'] != '' && $datos['lunes_hs'] != null && is_numeric($datos['lunes_hs'])) {
            $total_horas += $datos['lunes_hs'];
        }
        }

        if (isset($datos['martes_hs'])) {
        if ($datos['martes_hs'] != ''  && $datos['martes_hs'] != null && is_numeric($datos['martes_hs'])) {
            $total_horas += $datos['martes_hs'];
        }
        }

        if (isset($datos['miercoles_hs'])) {
        if ($datos['miercoles_hs'] != ''  && $datos['miercoles_hs'] != null  && is_numeric($datos['miercoles_hs'])) {
            $total_horas += $datos['miercoles_hs'];
        }
        }

        if (isset($datos['jueves_hs'])) {
        if ($datos['jueves_hs'] != ''  && $datos['jueves_hs'] != null  && is_numeric($datos['jueves_hs'])) {
            $total_horas += $datos['jueves_hs'];
        }
        }

        if (isset($datos['viernes_hs'])) {
        if ($datos['viernes_hs'] != ''  && $datos['viernes_hs'] != null && is_numeric($datos['viernes_hs'])) {
            $total_horas += $datos['viernes_hs'];
        }
        }

        return $total_horas;
    }
}

?>