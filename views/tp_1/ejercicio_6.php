<?php
include_once("../common/sidebar_menu.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<script>
    $('select').selectpicker();
</script>
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 6</h2>
    <form class="needs-validation" novalidate id="from_datos" name="from_datos" method="get" action="ejercicio_6_resultado.php">
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Nombre de alumno: </label>
            <input class="form-control" id="nombre" name="nombre" type="text" class="form-control" required>
            <div class="invalid-feedback">
                Debe ingresar un nombre
            </div>
            <div class="valid-feedback">
                正しい!
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label" > Ingrese Apellido de alumno: </label>
            <input class="form-control" id="apellido" name="apellido" type="text" class="form-control" required>
            <div class="invalid-feedback">
                Debe ingresar un apellido
            </div>
            <div class="valid-feedback">
                正しい!
            </div>
        </div>
        <div class="mb-3">
        <label for="" class="form-label" > Seleccione los deportes que practica el alumno: </label>
        <select name="deporte[]" class="selectpicker" multiple data-live-search="true" required>
            <option value="1">Futbol</option>
            <option value="2">Basquet</option>
            <option value="3">Voley</option>
            <option value="4">Tenis</option>
        </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
</form>
<script src="../assets/js/tp1/ejercicio_6.js"></script>
</div>
</div>
<?php
include_once("../common/footer.php");
?>