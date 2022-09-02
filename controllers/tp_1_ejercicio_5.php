<?php
class tp_1_ejercicio_5{
    
    public function visualizar_resultado ($datos){
        $error = false;
        if (!empty($datos)) {
            if (isset($datos['nombre'])) {
                if ($datos['nombre'] != '' && $datos['nombre'] != null ) {
                    $result['nombre'] = $datos['nombre'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['apellido'])) {
                if ($datos['apellido'] != '' && $datos['apellido'] != null ) {
                    $result['apellido'] = $datos['apellido'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['edad'])) {
                if ($datos['edad'] != '' && $datos['edad'] != null ) {
                    $result['edad'] = $datos['edad'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['direccion'])) {
                if ($datos['direccion'] != '' && $datos['direccion'] != null ) {
                    $result['direccion'] = $datos['direccion'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['estudios'])) {
                if ($datos['estudios'] != '' && $datos['estudios'] != null) {
                    if ($datos['estudios'] == '1') {
                    $result['estudios'] = 'No tiene estudios.';
                }
                if ($datos['estudios'] == '2') {
                    $result['estudios'] = 'Estudios primarios.';
                }

                if ($datos['estudios'] == '3') {
                    $result['estudios'] = 'Estudios Secundarios.';
                }
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['genero'])) {
                if ($datos['genero'] != '' && $datos['genero'] != null) {
                    if ($datos['genero'] == '1') {
                        $result['genero'] = 'Femenino.';
                    }
                    if ($datos['genero'] == '2') {
                        $result['genero']= 'Masculino.';
                    }
                }else{$error = true;}
            }else{$error = true;}
        }

        $result['error'] = $error;

        return $result;
    }
}

?>