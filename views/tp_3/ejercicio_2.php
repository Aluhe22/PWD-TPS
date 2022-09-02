<?php
include_once("../common/sidebar_menu.php");
?>
 
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 2</h2>
<form id="from_archivo" name="from_archivo" method="post" action="ejercicio_3_resultado.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">Subir archivo: </label>
        <input type="file" name="archivo" />
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