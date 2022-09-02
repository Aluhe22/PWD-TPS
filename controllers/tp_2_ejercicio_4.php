<?php
class tp_2_ejercicio_4{

    public function verificar_pelicula ($datos){
        $result = array();
        $error = true;
        $restricciones = '';
        
        if (isset($datos['titulo'])) {
            if ($datos['titulo'] != '' && $datos['titulo'] != null) {
               $result['titulo'] = $datos['titulo'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['actor'])) {
         if ($datos['actor'] != '' && $datos['actor'] != null) {
               $result['actor'] = $datos['actor'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['director'])) {
            if ($datos['director'] != '' && $datos['director'] !=null) {
               $result['director'] = $datos['director'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['guion'])) {
             if ($datos['guion'] != '' && $datos['guion'] != null) {
                $result['guion'] = $datos['guion'];
               }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['produccion'])) {
            if ($datos['produccion'] != '' && $datos['produccion'] != null) {
               $result['produccion'] = $datos['produccion'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['anio'])) {
            if ($datos['anio'] != '' && $datos['anio'] != null) {
               $result['anio'] = $datos['anio'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['nacionalidad'])) {
            if ($datos['nacionalidad'] != '' && $datos['nacionalidad'] != null) {
               $result['nacionalidad'] = $datos['nacionalidad'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['duracion'])) {
            if ($datos['duracion'] != '' && $datos['duracion'] != null) {
               $result['duracion'] = $datos['duracion'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['publico'])) {
            if ($datos['publico'] != '' && $datos['publico'] != null && $datos['publico'] == 1 ) {
                $restricciones.= ' Toda publico. ';
             }
         }
         
         if (isset($datos['menores'])) {
            if ($datos['menores'] != '' && $datos['menores'] != null && $datos['menores'] == 2) {
               $restricciones .= ' Mayores de 7 años. ';
             }
         }

        
         if (isset($datos['mayores'])) {
         if ($datos['mayores'] != '' && $datos['mayores'] != null && $datos['mayores'] == 3) {
            $restricciones .= ' Mayores de 18 años. ';
         }
        }

        if (isset($datos['sinopsis'])) {
            if ($datos['sinopsis'] != '' && $datos['sinopsis'] != null) {
               $result['sinopsis'] = $datos['sinopsis'];
            }else{$error = false;}
         }else{$error = false;}

         if (isset($datos['genero'])) {
         if ($datos['genero'] != '' && $datos['genero'] != null) {
            switch ($datos['genero']) {
                case '1':
                    $result['genero'] = 'Terror';
                    break;
                case '2':
                    $result['genero'] = 'Comedia';
                    break;
                case '3':
                    $result['genero'] = 'Drama';
                    break;
                case '4':
                    $result['genero'] = 'Romanticas';
                    break;
                case '5':
                    $result['genero'] = 'Suspensos';
                    break;
                case '6':
                    $result['genero'] = 'Otras';
                    break;
                default:
                    $result['genero'] = '';
                    break;
            }
         }else{$error = false;}
      }else{$error = false;}

        $result['error'] = $error;
        $result['restricciones'] = $restricciones;
        return $result;
    }
    
}

?>