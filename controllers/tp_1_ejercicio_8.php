<?php
class tp_1_ejercicio_8{
    
    public function visualizar_resultado ($datos){
        $error = false;
        $result = array();
        $es_estudiante = false;
        $entrada = 300;
        if (!empty($datos)) {

            if (isset($datos['estudiante'] )) {
                if ($datos['estudiante'] != '' && $datos['estudiante'] != null ) {
                    $es_estudiante = true;
                }else{$error = true;}
            }else{$error = true;}
           
            if (isset($datos['edad'] )) {
                if ($datos['edad'] != '' && $datos['edad'] != null ) {
                    if ($datos['edad'] < 12 && $es_estudiante != false && $datos['estudiante']=='1') {
                        $entrada = 160;
                    }
                    if ($datos['edad'] >= 12 && $es_estudiante != false && $datos['estudiante']=='1') {
                        $entrada = 180;
                    }
                }
            }else{$error = true;}

        }else{$error = true;}

        $result['error'] = $error;
        $result['entrada'] = $entrada;

        return $result;
    }
}

?>