<?php include("db.php")?>

<?php include("includes/header.php")?>

<?php
  $leerURL = 'leeruniversidad.php'; // URL a la clase PHP para "Leer"
  $eliminarURL = 'clase2.php'; // URL a la clase PHP para "Eliminar"
  $editarURL = 'clase3.php'; // URL a la clase PHP para "Editar"
  include 'includes/button.php';
  ?>

<div class="container d-flex justify-content-center p-4">
    <div class="w-100" style="max-width: 1200px;">
        <form action="servicioUniversidad.php" method="post">
        <!-- input nit -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">NIT</span>
        </div>
        <input type="text" class="form-control" name="nit" aria-label="Small" aria-describedby="inputGroup-sizing-sm" pattern="[0-9]+" maxlength="10" required>
        </div>
        <!-- input nombre -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        </div>
        <input type="text" class="form-control" name="name" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="100" required>
        </div>
        <!-- input direccion -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Direcciòn</span>
        </div>
        <input type="text" class="form-control" name="direccion" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="100" required>
        </div>
        <!-- input email -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        </div>
        <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm" maxlength="100" required>
        </div>
        <!-- input fecha -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
        </div>
        <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <!-- input telefono -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
        </div>
        <input type="text" class="form-control" name="telefono" aria-label="Small" aria-describedby="inputGroup-sizing-sm" pattern="[0-9]+" maxlength="20" required>
        </div>
        <!-- input salones -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Can. Salones</span>
        </div>
        <input type="text" class="form-control" name="salones" aria-label="Small" aria-describedby="inputGroup-sizing-sm" min="0" maxlength="11" required>
        </div>

        <!-- btn guardar -->
        <div class="container d-flex justify-content-center">
        <button class="btn btn-success">Guardar</button>
        </div>

        </form>
    </div>
</div>



<?php include("includes/footer.php")?>