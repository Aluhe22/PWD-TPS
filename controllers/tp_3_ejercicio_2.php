<?php
class tp_3_ejercicio_2 {
    function guardar_archivo(){
        $result = array();
        $url_archivo = false;
        $error = true;
        $dir_subida = 'C:/xampp/htdocs/PWD/views/assets/uploads/files/';
        if($_FILES['archivo']['name'] != ''){
            $fichero_subida = $dir_subida.basename($_FILES['archivo']['name']);
            $fileName = $_FILES['archivo']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $allowedfileExtensions = array('txt');
            if (in_array($fileExtension, $allowedfileExtensions)) {
                $error = false;
            }

            if ($error == false) {
                if (move_uploaded_file($_FILES['archivo']['tmp_name'],$fichero_subida)) {
                    $url_archivo = '../assets/uploads/files/'.$_FILES['archivo']['name'];
                    $error = false;
                }
            }
           
        }

        $result['error'] = $error;
        $result['url_archivo'] = $url_archivo;

        return $result;
    }
}