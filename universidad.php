<?php include("db.php")?>

<?php include("includes/header.php")?>

<div class="container d-flex justify-content-center p-4">
    <div class="w-100" style="max-width: 1200px;">
        <form action="repositoryUniversidad.php" method="post">
                        <!-- input nit -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">NIT</span>
        </div>
        <input type="text" class="form-control" name="nit" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input nombre -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
        </div>
        <input type="text" class="form-control" name="name" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input direccion -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Direcciòn</span>
        </div>
        <input type="text" class="form-control" name="direccion" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input email -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        </div>
        <input type="text" class="form-control" name="email" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input email -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
        </div>
        <input type="text" class="form-control" name="fecha" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input telefono -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Telefono</span>
        </div>
        <input type="text" class="form-control" name="telefono" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- input salones -->
        <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Can. Salones</span>
        </div>
        <input type="text" class="form-control" name="salones" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>

        <!-- btn guardar -->
        <div class="container d-flex justify-content-center">
        <button class="btn btn-success">Guardar</button>
        </div>

       

        </form>
    </div>
</div>



<?php include("includes/footer.php")?>