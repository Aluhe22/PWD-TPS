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
                    switch ($datos['caso']) {
                        case 1:
                            $data['simbolo'] = '-';
                            $result = $numero_1 - $numero_2;
                            break;
                        case 2:
                            $data['simbolo'] = '/';
                            $result = $numero_1 / $numero_2;
                            break;
                        case 3:
                            $data['simbolo']='+';
                            $result = $numero_1 + $numero_2;
                            break;
                        default:
                            $error = true;
                        break;
                    }
            }else{$error = true;}
        }
        
    }


        $data['error'] = $error;
        $data['numero_1'] = $numero_1;
        $data['numero_2'] = $numero_2;
        $data['result'] = $result;
        
        return $data;
    }
}

?>