<?php
include_once("../common/sidebar_menu.php");
?>

<div  class="container-fluid">
<div class="container col-md-5" style="margin:30px;height: 150vh;">
<h2>Ejercicio 2 ME FUNCIONA EL GITHUUUB DESDE EL VISUAAL</h2>
<h3>Horarios de la materia PWD</h3>
<form class="needs-validation" novalidate id="from_horarios" name="from_horarios" method="post" action="ejercicio_2_resultado.php">
    <div class="mb-3">
        <label for="" class="form-label">Lunes: </label>
        <input type="number" class="form-control" id="lunes_hs" name="lunes_hs" min="0" required>
        <div class="invalid-feedback">
                Debe por lo menos poner 0 si no tiene Clases!
        </div>
        <div class="valid-feedback">
                 正しい!
        </div>
    </div>    
    <div class="mb-3">
        <label for="" class="form-label">Martes: </label>
        <input type="number" class="form-control" id="martes_hs" name="martes_hs" min="0" required >
        <div class="invalid-feedback">
                Debe por lo menos poner 0 si no tiene Clases!
        </div>
        <div class="valid-feedback">
                 正しい!
        </div>
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Miercoles: </label>
        <input type="number" class="form-control" id="miercoles_hs" name="miercoles_hs" min="0" required>
        <div class="invalid-feedback">
                Debe por lo menos poner 0 si no tiene Clases!
        </div>
        <div class="valid-feedback">
                 正しい!
        </div>
    </div> 
    <div class="mb-3">
        <label for="min="0"class="form-label">Jueves: </label>
        <input type="number" class="form-control" id="jueves_hs" name="jueves_hs" min="0" required >
        <div class="invalid-feedback">
                Debe por lo menos poner 0 si no tiene Clases!
        </div>
        <div class="valid-feedback">
                 正しい!
        </div>
    </div> 
    <div class="mb-3">
        <label for="" class="form-label">Viernes: </label>
        <input type="number" class="form-control" id="viernes_hs" name="viernes_hs" min="0" required >
        <div class="invalid-feedback">
                Debe por lo menos poner 0 si no tiene Clases!
        </div>
        <div class="valid-feedback">
                 正しい!
        </div>
    </div>    
    <div class="mb-3">
       <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
</form>
<script src="../assets/js/tp1/ejercicio_2.js"></script>
</div>
</div>
<?php
include_once("../common/footer.php");
?>