<?php
include_once("../../controllers/tp_3_ejercicio_2.php");
//include_once("../../controllers/utiles.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_3_ejercicio_2;

$result = $obj_controlador->guardar_archivo($datos);
?>
<div class="container-fluid">
<div class="container col-md-12" style="margin:30px;">
<h2>Resultado del Ejercicio 2:</h2>
    <div class="mb-3">
    <p class="lead">
    <?php if ($result['error'] == false) {
    echo '<a  target="_blank" href="'.$result['url_archivo'].'">Ver Archivo</a>';
    }else{
        echo ' Error al subir el archivo.';
    }
    ?></p>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_2.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  