<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
  <div class="container col-md-12" style="margin:30px;height: 210vh;">
    <h2>Ejercicio 4</h2>
    <div class="card">
      <h5 class="card-header text-primary"><i class="bi bi-pencil-square"></i> Cinem@s</h5>
      <div class="card-body">

        <form class="needs-validation" novalidate id="from_cine" name="from_cine" method="post" action="ejercicio_4_resultado.php">
        <div class="row g-3">
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
              Debe ingresar un Actor
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
                Debe ingresar un director
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
              Debe ingresar una produccion
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Año</label>
            <input name="anio" type="number" class="form-control" id="anio" min="4" required>
            <div class="invalid-feedback">
              Debe ingresar un Año
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Nacionalidad</label>
            <input name="nacionalidad" type="text" class="form-control" id="nacionalidad" required>
            <div class="invalid-feedback">
              Debe ingresar una Nacionalidad
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label">Genero</label>
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
            <input name="duracion" type="number" class="form-control" min="1" id="duracion" required>
            <div class="invalid-feedback">
              Debe ingresar una duracion en minuto
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <div class="col-md-12">
            <div style="align-items:center;">
              <label for="" class="form-label">Restricciones</label>
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
            <textarea name="sinopsis" class="form-control" id="sinopsis" rows="3" required></textarea>
            <div class="invalid-feedback">
              Debe ingresar una sinopsis
            </div>
            <div class="valid-feedback">
              正しい!
            </div>
          </div>
          <br />
          <div class="row justify-content-end m-2">
              <div class="col-1">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
              <div class="col-1">
                <button type="reset" class="btn">Borrar</button>
              </div>

            </div>
        </div>  
        
        </form>
      </div>

    </div>



    <script src="../assets/js/tp2/ejercicio_4.js"></script>
  </div>
</div>
<?php
include_once("../common/footer.php");
?>