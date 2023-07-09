<?php

require_once 'db.php';

// Crear una instancia de la clase DB
$db = new DB();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Obtener los valores del formulario
    $NIT = $_POST['NIT'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $type = $_POST['type'];

    $db->insertSalon($NIT, $name, $category, $type);
     

    $db->closeConnection();
}
?>