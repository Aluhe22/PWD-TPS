<?php
include_once("../common/sidebar_menu.php");
?>
 
<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;">
<h2>Ejercicio 1</h2>
<form class="needs-validation" novalidate id="from_archivo" name="from_archivo" method="post" action="ejercicio_1_resultado.php" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">Subir archivo: </label>
        <input type="file" name="archivo" required/>
        <div class="invalid-feedback">
            Debe subir un archivo
        </div>
        <div class="valid-feedback">
         正しい!
        </div>
    </div>       
    <div class="mb-3">
       <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</form>
<script src="../assets/js/tp3/ejercicio_1.js"></script>
</div>
</div>
<?php
include_once("../common/footer.php");
?>