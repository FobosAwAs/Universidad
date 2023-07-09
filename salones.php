<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<form>
  <!-- Select your favorite fruit:
  <select id="mySelect">
    <option value="apple">Apple</option>
    <option value="orange">Orange</option>
    <option value="pineapple">Pineapple</option>
    <option value="banana">Banana</option>
  </select> -->

  <script>
    function handleCategoryChange(category) {
      var tipoSalonContainer = document.getElementById("tipoSalonContainer");
      var tipoSalonSelect = document.getElementById("inputGroupSelect02");

      tipoSalonContainer.style.display = "flex"; // Mostrar el contenedor de tipo de salón

      // Limpiar las opciones existentes
      tipoSalonSelect.innerHTML = "";

      if (category === "0") {
        // Agregar opciones para salones estándar
        var option1 = document.createElement("option");
        option1.value = "Sencillo";
        option1.text = "Sencillo";
        tipoSalonSelect.add(option1);

        var option2 = document.createElement("option");
        option2.value = "Amoblado";
        option2.text = "Amoblado";
        tipoSalonSelect.add(option2);
      } else if (category === "1") {
        // Agregar opciones para salones de auditorio
        var option1 = document.createElement("option");
        option1.value = "Mediano";
        option1.text = "Mediano";
        tipoSalonSelect.add(option1);

        var option2 = document.createElement("option");
        option2.value = "Grande";
        option2.text = "Grande";
        tipoSalonSelect.add(option2);
      } else if (category === "2") {
        // Agregar opciones para salones de videoconferencia
        var option1 = document.createElement("option");
        option1.value = "Sencillo";
        option1.text = "Sencillo";
        tipoSalonSelect.add(option1);

        var option2 = document.createElement("option");
        option2.value = "Amoblado";
        option2.text = "Amoblado";
        tipoSalonSelect.add(option2);

        var option3 = document.createElement("option");
        option3.value = "Mediano";
        option3.text = "Mediano";
        tipoSalonSelect.add(option3);
      }
    }
  </script>
  <div class="container d-flex justify-content-center p-4">
    <div class="w-100" style="max-width: 1200px;">
      <form action="repositoryUniversidad.php" method="post">
        <!-- input nombre -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
          </div>
          <input type="text" class="form-control" name="name" aria-label="Small"
            aria-describedby="inputGroup-sizing-sm" minlength="1" maxlength="10" required>
        </div>

        <!-- input NIT universidad -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">NIT universidad</span>
          </div>
          <input type="text" class="form-control" name="direccion" aria-label="Small"
            aria-describedby="inputGroup-sizing-sm" minlength="1" maxlength="11" pattern="[0-9]+" required>
        </div>

        <!-- input categoría -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Categoría</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" onchange="handleCategoryChange(this.value)" required>
            <option value="" selected disabled hidden>Seleccione...</option>
            <option value="0">Estandar</option>
            <option value="1">Auditorio</option>
            <option value="2">Videoconferencia</option>
          </select>
        </div>

        <!-- input tipo de salón -->
        <div class="input-group mb-3" id="tipoSalonContainer" style="display: none;">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect02" style="max-width: 130px;">Tipo de salón</label>
          </div>
          <select class="custom-select" id="inputGroupSelect02">
            <!-- Opciones de tipo de salón se generarán dinámicamente -->
          </select>
        </div>
        <!-- btn guardar -->
        <div class="container d-flex justify-content-center">
          <button class="btn btn-success">Guardar</button>
        </div>



      </form>
    </div>
  </div>



  <?php include("includes/footer.php") ?>