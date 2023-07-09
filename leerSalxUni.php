<?php include("includes/header.php")?>
<?php include("db.php")?>

<?php
  $leerURL = 'leerSalon.php'; // URL a la clase PHP para "Leer"
  $eliminarURL = 'clase2.php'; // URL a la clase PHP para "Eliminar"
  $editarURL = 'clase3.php'; // URL a la clase PHP para "Editar"
  include 'includes/button.php';
  ?>
<div class="container" style="width: 1200px;">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#NIT</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoria</th>
        <th scope="col">Tipo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $NIT = $_POST['NIT'];
            $db = new DB();
            $salones = $db->readSalxUni($NIT);
        
            if ($salones) {
                foreach ($salones as $salones) {
                    echo "<tr>";
                    echo "<td>" . $salones['universidad_id'] . "</td>";
                    echo "<td>" . $salones['nombre'] . "</td>";
                    echo "<td>" . $salones['categoria'] . "</td>";
                    echo "<td>" . $salones['tipo'] . "</td>";
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron universidades</td></tr>";
            }

        ?>
    </tbody>
    </table>
</div>
