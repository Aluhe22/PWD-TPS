<?php
include_once("../common/sidebar_menu.php");
?>

  
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 1</h2>
<form  class=" needs-validation"  id="from_numero" name="from_numero" method="post" action="ejercicio_1_resultado.php" novalidate>
    <div class="mb-3">
        <label for="" class="form-label">Ingrese Numero: </label>
        <input type="number" class="form-control" id="numero" name="numero" required>
        <div class="invalid-feedback">
                Ingrese un numero!
        </div>
        <div class="valid-feedback">
                正しい!
        </div>
    </div>       
    <div class="mb-3">
    <input class="btn btn-primary btn-lg" type="submit" value="Enviar">
    </div>
</form>
<script src="../assets/js/tp1/ejercicio_1.js"></script>
</div>
</div>

<?php
include_once("../common/footer.php");
?>