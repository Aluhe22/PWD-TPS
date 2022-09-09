<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
  <div class="container col-md-12" style="margin:30px;height: 190vh;">
    <h2>Ejercicio 3</h2>

    <div class="card">
      <h5 class="card-header text-primary"><i class="bi bi-pencil-square"></i> Cinem@s</h5>
      <div class="card-body">
        <form class="row g-3 needs-validation" novalidate id="from_cine" name="from_cine" method="post" action="ejercicio_3_resultado.php" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="" class="form-label">Titulo</label>
            <input name="titulo" type="text" class="form-control" id="titulo" required>
            <div class="invalid-feedback">
              Debe ingresar un titulo
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Actores</label>
            <input type="text" class="form-control" id="actor" name="actor" required>
            <div class="invalid-feedback">
              Debe ingresar un actor
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Director</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control" id="director" name="director" required>
              <div class="invalid-feedback">
                Debe ingresar un direccion
              </div>
              <div class="valid-feedback">
                正しい!
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Guion</label>
            <input name="guion" type="text" class="form-control" id="guion" required>
            <div class="invalid-feedback">
              Debe ingresar un guion
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Produccion</label>
            <input name="produccion" type="text" class="form-control" id="produccion" required>
            <div class="invalid-feedback">
              Debe ingresar la produccion
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Año</label>
            <input name="anio" type="number" class="form-control" id="anio" min="4" required>
            <div class="invalid-feedback">
              Debe ingresar el Año
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Nacionalidad</label>
            <input name="nacionalidad" type="text" class="form-control" id="nacionalidad" required>
            <div class="invalid-feedback">
              Debe ingresar la Nacionalidad
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="genero" class="form-label">Genero</label>
            <select name="genero" class="form-select" id="genero" required>
              <option selected disabled value="">Seleccione genero...</option>
              <option value="1">Terror</option>
              <option value="2">Comedia</option>
              <option value="3">Drama</option>
              <option value="4">Romanticas</option>
              <option value="5">Suspensos</option>
              <option value="6">Otras</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="" class="form-label">Duracion</label>
            <input name="duracion" type="number" class="form-control" id="duracion" min="1" required>
            <div class="invalid-feedback">
              Debe ingresar la duracion
            </div>
            <div class="valid-feedback">
              正しい!
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
            <label for="" class="form-label">Sinopsis</label>
            <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3"></textarea>
            <div class="invalid-feedback">
              Debe ingresar una sipnopsis
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-12">
            <label for="" class="form-label">Archivo</label>
            <input name="archivo" type="file" class="form-control" id="archivo" required>
            <div class="invalid-feedback">
              Debe ingresar un archivo
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="row justify-content-end m-2">
            <div class="col-1">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <div class="col-1">
              <button type="reset" class="btn">Borrar</button>
            </div>

          </div>
        </form>
      </div>

    </div>


    <script src="../assets/js/tp3/ejercicio_3.js"></script>
  </div>
</div>
<?php
include_once("../common/footer.php");
?>