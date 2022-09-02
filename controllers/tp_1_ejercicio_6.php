<?php
class tp_1_ejercicio_6{
    
    public function visualizar_resultado ($datos){
        $result = array();
        $error = false;
        if (!empty($datos)) {
            if (isset($datos['nombre'])) {
                if ($datos['nombre'] != '' && $datos['nombre'] != null ) {
                    $result['nombre']=$datos['nombre'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['apellido'])) {
                if ($datos['apellido'] != '' && $datos['apellido'] != null ) {
                    $result['apellido']= $datos['apellido'];
                 }else{$error = true;}
                }else{$error = true;}
          
            if (isset($datos['deporte'])) {
                if ($datos['deporte'] != '' && $datos['deporte'] != null ) {
                    $result['deporte']= count($datos['deporte']);
                }else{$error = true;}
            }else{$error = true;}
        }else{$error = true;}

        $result['error'] = $error;

        return $result;
    }
}

?>