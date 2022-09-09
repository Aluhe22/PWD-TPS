<?php
include_once("../common/sidebar_menu.php");
?>
<div class="container-fluid">
<div class="container col-md-12" style="margin:30px;">
<h2>Ejercicio 3</h2> 
<button type="button" class="btn btn-success d-table my-5 mx-auto" data-bs-toggle="modal" data-bs-target="#ModalForm">
  Login
</button>

<!-- Modal Form -->
<div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <!-- Login Form -->
        <form class="needs-validation" novalidate id="from_login" name="from_login" method="post" action="ejercicio_3_resultado.php">
        <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="Username">Username<span class="text-danger">*</span></label>
                <input type="text" name="usuario" class="form-control" id="Username" placeholder="Enter Username" required>
                <div class="invalid-feedback">
                  Debe ingresar un usuario
                </div>
                <div class="valid-feedback">
                  正しい!
                </div>
              </div>

            <div class="mb-3">
                <label for="Password">Password<span class="text-danger">*</span></label>
                <input type="password" name="pass" class="form-control" id="Password" placeholder="Enter Password" required>
                <div class="invalid-feedback">
                  Debe ingresar una password
                </div>
                <div class="valid-feedback">
                  正しい!
                </div>
              </div>
          </div>
          <div class="modal-footer pt-4">                  
            <button type="submit" class="btn btn-success mx-auto w-100">Login</button>
          </div>
      </form>
      <script src="../assets/js/tp2/ejercicio_3.js"></script>
    </div>
  </div>
</div>
</div>
</div>
<?php
include_once("../common/footer.php");
?>