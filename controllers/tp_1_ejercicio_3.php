<?php
class tp_1_ejercicio_3{
    
    public function visualizar_resultado ($datos){
        $data = array();
        $result = '';
        $error = false;
        if (!empty($datos)) {
            if (isset($datos['nombre'] )) {
                if ($datos['nombre'] != '' && $datos['nombre'] != null ) {
                    $result .= 'Hola, yo soy '.$datos['nombre'].', ';
                }else{ $error = true;}
            }else{$error = true;}
          
            if (isset($datos['apellido'])) {
                if ($datos['apellido'] != '' && $datos['apellido'] != null ) {
                    $result .= $datos['apellido'].' ';
                }else{ $error = true;}
            }else{$error = true;}

            if (isset($datos['edad'])) {
                if ($datos['edad'] != '' && $datos['edad'] != null ) {
                    $result .= 'Tengo '.$datos['edad'].' anios y ';
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['direccion'])) {
                if ($datos['direccion'] != '' && $datos['direccion'] != null ) {
                    $result .= 'vivo en '.$datos['direccion'].' ';
                }else{$error = true;}
            }else{$error = true;}

    }
    $data['result'] = $result;
    $data['error'] = $error;

    return $data;
}

}

?>