<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 8</h2>
    <form class="row" id="from_datos" name="from_datos" method="post" action="ejercicio_8_resultado.php">
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese su Edad: </label>
            <input class="form-control" id="edad" name="edad" type="number" class="form-control" required>
        </div>
        <div class="mb-3">
        <select name="estudiante" id="estudiante" class="form-select" aria-label="Default select">
        <option selected>Es estudiante? </option>
        <option value="1">Si</option>
        <option value="2">No</option>
        </select>
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