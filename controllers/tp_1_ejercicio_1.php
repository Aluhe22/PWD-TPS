<?php
class tp_1_ejercicio_1{
    
    public function visualizar_resultado ($numero){
        
        if (isset($numero)) {
            if ($numero != '' && $numero != null && is_numeric($numero)) {
                return $numero;
             }
        }

        return false;
    }
}

?>