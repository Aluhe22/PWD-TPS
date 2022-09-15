<?php
include_once("../../controllers/tp_3_ejercicio_3.php");
//include_once("../../controllers/utiles.php");
include_once("../common/sidebar_menu.php");

$datos = data_submitted();

$obj_controlador = new tp_3_ejercicio_3;

$result = $obj_controlador->verificar_pelicula($datos);
?>
<div  class="container-fluid">
<div class="container col-md-12" style="margin:30px;height: 220vh;">
<h2>Resultado del Ejercicio 3:</h2>
    <div class="mb-3">
    <div class="alert alert-success" role="alert">
        <?php 
        if ($result['error'] != false) {
            echo '<h1 class="display-6"><b>La pelicula ingresada es:</b></h1>';
            echo '<h1 class="display-6"><b>Titulo:</b>'.$result['titulo'].'</h1>';
            echo '<h1 class="display-6"><b>Actores:</b>'.$result['actor'].'</h1>';
            echo '<h1 class="display-6"><b>Director:</b>'.$result['director'].'</h1>';
            echo '<h1 class="display-6"><b>Guion:</b>'.$result['guion'].'</h1>';
            echo '<h1 class="display-6"><b>Produccion:</b>'.$result['produccion'].'</h1>';
            echo '<h1 class="display-6"><b>Año:</b>'.$result['anio'].'</h1>';
            echo '<h1 class="display-6"><b>Nacionalidad:</b>'.$result['nacionalidad'].'</h1>';
            echo '<h1 class="display-6"><b>Genero:</b>'.$result['genero'].'</h1>';
            echo '<h1 class="display-6"><b>Duracion:</b>'.$result['duracion'].'</h1>';
            echo '<h1 class="display-6"><b>Restricciones de edad:</b>'.$result['restricciones'].'</h1>';
            echo '<img style="width:500px;height: 400px;" src="'.$result['url_archivo'].'" alt="">';
   
       }else{
            echo '<p class="lead"> Error al intentar cargar la pelicula. </p>';
        }
       ?>
    </div>
    </div>
    <div class="mb-3">
       <a href= "ejercicio_3.php" class="btn btn-primary">Volver</a>
    </div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>

  