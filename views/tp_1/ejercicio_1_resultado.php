<?php
include_once("../../controllers/tp_1_ejercicio_1.php");
include_once("../../controllers/My_Controller.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_1_ejercicio_1;

$numero = $obj_controlador->visualizar_resultado($datos['numero']);

?>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Resultado del Ejercicio 1:</h2>
    <div class="mb-3">
        <?php 
        if ($numero != false) {
            echo ' <p class="lead">El valor de X es:'.$numero.'</p>';
        }else{
            echo ' <p class="lead"> No ingreso un valor valido </p>';
        }
        ?>
    
    </div>
    <div class="mb-3">
       <a href= "ejercicio_1.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>