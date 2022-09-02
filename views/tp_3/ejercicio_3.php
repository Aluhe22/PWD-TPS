<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
<div class="container col-md-12" style="margin:30px;height: 150vh;">
<h2>Ejercicio 3</h2> 
<form class="row g-3 needs-validation" novalidate id="from_cine" name="from_cine" method="post" action="ejercicio_3_resultado.php" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Titulo</label>
    <input name="titulo" type="text" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Actores</label>
    <input type="text" class="form-control" id="validationCustom02" name="actor" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom09" class="form-label">Director</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustom09" name="director" required>
      <div class="valid-feedback">
      Looks good!
    </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Guion</label>
    <input name="guion" type="text" class="form-control" id="validationCustom03" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Produccion</label>
    <input name="produccion" type="text" class="form-control" id="validationCustom05" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom08" class="form-label">Año</label>
    <input name="anio" type="number" class="form-control" id="validationCustom08" maxlength="4" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom10" class="form-label">Nacionalidad</label>
    <input name="nacionalidad" type="text" class="form-control" id="validationCustom10" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom04" class="form-label">Genero</label>
    <select name="genero" class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Seleccione genero...</option>
      <option value="1">Terror</option>
      <option value="2">Comedia</option>
      <option value="3">Drama</option>
      <option value="4">Romanticas</option>
      <option value="5">Suspensos</option>
      <option value="6">Otras</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom10" class="form-label">Duracion</label>
    <input name="duracion" type="number" class="form-control" id="validationCustom10" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <div style="align-items:center;">
    <label for="validationCustom10" class="form-label">Restricciones</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="publico" id="inlineCheckbox1" value="1">
      <label class="form-check-label" for="inlineCheckbox1">Todo Publico</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="menores" id="inlineCheckbox2" value="2">
      <label class="form-check-label" for="inlineCheckbox2">Mayores de 7 años</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="mayores" id="inlineCheckbox2" value="3">
      <label class="form-check-label" for="inlineCheckbox2">Mayores de 18 años</label>
    </div>
    </div>
  </div>
  <div class="col-md-12">
    <label for="exampleFormControlTextarea1" class="form-label">Sinopsis</label>
    <textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-md-12">
  <label for="validationCustom10" class="form-label">Archivo</label>
  <input name="archivo" type="file" class="form-control" id="validationCustom11" required>
  </div>
  <div class="col-md-12">
    <button class="btn btn-primary" type="submit">Guardar</button>
  </div>
</form>
</div>
</div>
<?php
include_once("../common/footer.php");
?>