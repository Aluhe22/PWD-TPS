<?php
include_once("../../controllers/tp_1_ejercicio_7.php");
include_once("../../controllers/My_Controller.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_1_ejercicio_7;

$result = $obj_controlador->visualizar_resultado($datos);
?>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Resultado del Ejercicio 7:</h2>
    <div class="mb-3">
    <p class="lead"> <?php
    if ($result['error'] != true ) {
        echo $result['numero_1'].' '.$result['simbolo'].' '.$result['numero_2'].' = '.$result['result'];
    }else{
        echo 'Error no ingreso todos los datos requeridos';
    }
    ?></p>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_7.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  