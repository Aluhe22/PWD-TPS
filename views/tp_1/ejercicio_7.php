<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 7</h2>
    <form class="row" id="from_datos" name="from_datos" method="get" action="ejercicio_7_resultado.php">
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Numero: </label>
            <input class="form-control" id="numero_1" name="numero_1" type="number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Numero: </label>
            <input class="form-control" id="numero_2" name="numero_2" type="number" class="form-control" required>
        </div>
        <div class="mb-3">
        <select name="caso" id="caso" class="form-select" aria-label="Default select">
        <option selected>Seleccione un Caso </option>
        <option value="1">Resta</option>
        <option value="2">Dividir</option>
        <option value="3">Suma</option>
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