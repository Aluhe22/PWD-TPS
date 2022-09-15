<?php
include_once("../../controllers/tp_1_ejercicio_6.php");
//include_once("../../controllers/utiles.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_1_ejercicio_6;

$result = $obj_controlador->visualizar_resultado($datos);
?>
<div  class="container-fluid">
<div class="container col-md-7" style="margin:30px;height: 90vh;">
<h2>Resultado del Ejercicio 6:</h2>
    <div class="mb-3">
    <?php 
    if ($result['error'] != true) {

        echo '<h1 class="display-6"><b>Nombre:</b> '.$result['nombre'].'</h1>';
        echo '<h1 class="display-6"><b>Apellido:</b> '.$result['apellido'].'</h1>';
        echo '<h1 class="display-6"><b>Cantidad de deportes que realiza:</b> '.$result['deporte'].'</h1>';
  
    }else{
        echo '<p class="lead">Error no ingreso todos los datos requeridos</p>';
    }?>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_6.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  