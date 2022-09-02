<?php
include_once("../../controllers/tp_2_ejercicio_3.php");
include_once("../../controllers/My_Controller.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_2_ejercicio_3;

$usuarios = array();
$usuarios[] = array(
    'usuario' => 'Mati_1',
    'pass' => 12345678
);
$usuarios[] = array(
    'usuario' => 'Mati_2',
    'pass' => 12345679
);

$result = $obj_controlador->verificar_usuario($datos['usuario'],$datos['pass'],$usuarios);
?>
<div class="container-fluid">
<div class="container col-md-12" style="margin:30px;">
<h2>Resultado del Ejercicio 3:</h2>
    <div class="mb-3">
    <p class="lead"> <?php if ($result['error_pass'] == false) {
        echo 'La password debe tener 8 caracteres, por lo minimo una mayuscula y un numero.';
    }
    if($result['error'] != false){
        echo 'Bienvenido!!';
    }else{
        echo ' <br/> El usuario o la password es incorrecta. ';
    }
    ?></p>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_3.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  