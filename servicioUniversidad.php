<?php

require_once 'db.php';

// Crear una instancia de la clase DB
$db = new DB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nit = $_POST['nit'];
    $name = $_POST['name'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $telefono = $_POST['telefono'];
    $salones = $_POST['salones'];

    echo "Valor del campo 'nit': " . $nit;
    echo "Valor del campo 'name': " . $name;
    echo "Valor del campo 'direccion': " . $direccion;
    echo "Valor del campo 'email': " . $email;
    echo "Valor del campo 'telefono': " . $telefono;
    echo "Valor del campo 'salones': " . $salones;    

    $db->insertUniversidad($nit, $name, $direccion, $email, $fecha, $telefono, $salones);

     

    $db->closeConnection();

   
}
?>