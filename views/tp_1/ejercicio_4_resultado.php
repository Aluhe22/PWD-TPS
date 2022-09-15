<?php
include_once("../../controllers/tp_1_ejercicio_4.php");
//include_once("../../controllers/utiles.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_1_ejercicio_4;

$result = $obj_controlador->visualizar_resultado($datos);
?>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Resultado del Ejercicio 4:</h2>
    <div class="mb-3">
    <h1 class="display-6"> <?php
    if ($result['error'] == false) {
        echo $result['result'];
    }else{
        echo ' No ingreso todos los datos requeridos. ';
    }
    ?></h1>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_4.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  