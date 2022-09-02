<?php
include_once("../common/sidebar_menu.php");
?>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;height: 110vh;">
<h2>Ejercicio 5</h2>
    <form class="row" id="from_datos" name="from_datos" method="get" action="ejercicio_5_resultado.php">
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
        <select name="genero" id="genero" class="form-select" aria-label="Default select">
        <option selected>Seleccione un Sexo </option>
        <option value="1">Femenino</option>
        <option value="2">Masculino</option>
        <option value="3">Otros</option>
        </select>
        </div>
        <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="estudios" id="flexRadioDefault1" value ="1" >
            <label class="form-check-label" for="flexRadioDefault1">
            No tiene estudios
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="estudios" id="flexRadioDefault2" value="2">
            <label class="form-check-label" for="flexRadioDefault2">
            Estudios primarios
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="estudios" id="flexRadioDefault2" value="3">
            <label class="form-check-label" for="flexRadioDefault2">
            Estudios Secundarios
            </label>
        </div>
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