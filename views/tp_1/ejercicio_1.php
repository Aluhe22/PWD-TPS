<?php
include_once("../common/sidebar_menu.php");
?>
 
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 1</h2>
<form id="from_numero" name="from_numero" method="post" action="ejercicio_1_resultado.php">
    <div class="mb-3">
        <label for="" class="form-label">Ingrese Numero: </label>
        <input type="number" class="form-control" id="numero" name="numero" require>
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