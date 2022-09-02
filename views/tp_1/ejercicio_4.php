<?php
include_once("../common/sidebar_menu.php");
?>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;height: 90vh;">
<h2>Ejercicio 4</h2>
    <form class="row" id="from_datos" name="from_datos" method="get" action="ejercicio_4_resultado.php">
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Nombre: </label>
            <input class="form-control" id="nombre" name="nombre" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Apellido: </label>
            <input class="form-control" id="apellido" name="apellido" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Ingrese Edad: </label>
            <input class="form-control" id="edad" name="edad" type="number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Ingrese Direccion: </label>
            <input class="form-control" id="direccion" name="direccion" type="text" class="form-control" required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
</form>
</div>
</div>
<?php
include_once("../common/footer.php");
?>