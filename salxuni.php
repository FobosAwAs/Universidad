<?php include("db.php") ?>

<?php include("includes/header.php") ?>
<div class="container d-flex justify-content-center p-4">
    <div class="w-100" style="max-width: 1200px;">
      <form action="leerSalxUni.php" method="post">
        <!-- input NIT universidad -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">NIT universidad</span>
          </div>
          <input type="text" class="form-control" name="NIT" aria-label="Small"
            aria-describedby="inputGroup-sizing-sm" minlength="1" maxlength="11" pattern="[0-9]+" required>
        </div>
        <!-- btn Ver salones -->
        <div class="container d-flex justify-content-center">
        <button class="btn btn-success">Ver Salones</button>
        </div>