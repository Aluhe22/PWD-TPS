<?php
class tp_2_ejercicio_3{

    public function verificar_usuario ($id_usuario,$pass,$usuarios){
        $result = array();
        $exit = false;
        $error_pass = false;
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       
        if (strlen($pass)>0 && $pass != '') {
            for ($i=0; $i < strlen($pass)  ; $i++) {
                if ((strpos($permitidos, substr($pass,$i,1))===false) && strlen($pass) > 8){
                 $error_pass = true;
                }
            }
        }
        if (($id_usuario != '' || $id_usuario != null) && ($pass != '' || $pass != null)) {
           foreach($usuarios as $row){
            if (($row['usuario'] == $id_usuario) && ($row['pass'] == $pass)) {
                $exit = true;
            }
           }
           
        }else{$exit = false;}

        $result['error'] = $exit;
        $result['error_pass'] = $error_pass;
        return $result;
    }
    
}

?>