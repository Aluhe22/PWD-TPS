<?php
class tp_1_ejercicio_7{
    
    public function visualizar_resultado ($datos){
        $data = array();
        $error = false;
        $numero_1 = 0;
        $numero_2 = 0;
        $result = 0;
        if (!empty($datos)) {
            if (isset($datos['numero_1'])) {
                if ($datos['numero_1'] != '' && $datos['numero_1'] != null ) {
                 $numero_1 =$datos['numero_1'];
                }else{$error = true;}
            }else{$error = true;}

            if (isset($datos['numero_2'])) {
                if ($datos['numero_2'] != '' && $datos['numero_2'] != null ) {
                    $numero_2 =$datos['numero_2'];
                }else{$error = true;}
            }else{$error = true;}
           
            if (isset($datos['caso']) && $error != true) {
                if ($datos['caso'] != '' && $datos['caso'] != null) {
                    if ($datos['caso'] == 1) {
                        //es resta
                        $data['simbolo'] = '-';
                        $result = $numero_1 - $numero_2;
                    }
                    if ($datos['caso'] == 2) {
                        //es dividir
                        $data['simbolo'] = '/';
                        $result = $numero_1 / $numero_2;
                    }
                    if ($datos['caso'] == 3) {
                        //es suma
                        $data['simbolo']='+';
                        $result = $numero_1 + $numero_2;
                    }
                }
            }else{$error = true;}
        }

        $data['error'] = $error;
        $data['numero_1'] = $numero_1;
        $data['numero_2'] = $numero_2;
        $data['result'] = $result;
        
        return $data;

    }
}

?>