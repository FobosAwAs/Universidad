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
        <th scope="col">Dirección</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha</th>
        <th scope="col">Telefono</th>
        <th scope="col">CanSalones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $db = new DB();
            $universidades = $db->readSalxUni(1);
        
            if ($universidades) {
                foreach ($universidades as $universidad) {
                    echo "<tr>";
                    echo "<td>" . $universidad['nit'] . "</td>";
                    echo "<td>" . $universidad['nombre'] . "</td>";
                    echo "<td>" . $universidad['direccion'] . "</td>";
                    echo "<td>" . $universidad['email'] . "</td>";
                    echo "<td>" . $universidad['fecha'] . "</td>";
                    echo "<td>" . $universidad['telefono'] . "</td>";
                    echo "<td>" . $universidad['cant_salones'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron universidades</td></tr>";
            }

        ?>
    </tbody>
    </table>
</div>
