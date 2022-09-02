<?php
include_once("../common/sidebar_menu.php");
?>

<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;height: 120vh;">
<h2>Ejercicio 2</h2>
<h3>Horarios de la materia PWD</h3>
<form class="row g-1 needs-validation" novalidate id="from_horarios" name="from_horarios" method="post" action="ejercicio_2_resultado.php">
    <div class="mb-3">
        <label for="" class="form-label">Lunes: </label>
        <input type="number" class="form-control" id="lunes_hs" name="lunes_hs"  require>
    </div>    
    <div class="mb-3">
        <label for="" class="form-label">Martes: </label>
        <input type="number" class="form-control" id="martes_hs" name="martes_hs" require >
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Miercoles: </label>
        <input type="number" class="form-control" id="miercoles_hs" name="miercoles_hs" require>
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Jueves: </label>
        <input type="number" class="form-control" id="jueves_hs" name="jueves_hs" require >
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Viernes: </label>
        <input type="number" class="form-control" id="viernes_hs" name="viernes_hs" require >
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