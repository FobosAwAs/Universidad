<?php
class DB {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'universidades';
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conn) {
            die('Error al conectar a la base de datos: ' . mysqli_connect_error());
        }
    }

    public function insertUniversidad($nit, $name, $direccion, $email, $fecha, $telefono, $salones) {
        // Verificar si el NIT o el nombre ya existen en la base de datos
        $checkQuery = "SELECT COUNT(*) AS count FROM universidades WHERE nit = '$nit' OR nombre = '$name'";
        $checkResult = mysqli_query($this->conn, $checkQuery);
        $row = mysqli_fetch_assoc($checkResult);
        if ($row['count'] > 0) {
            echo 'Error: El NIT o el nombre ya están registrados.';
            return;
        }
    
        // Insertar el nuevo registro si el NIT y el nombre no están duplicados
        $sql = "INSERT INTO universidades (nit, nombre, direccion, email, fecha, telefono, cant_salones) 
                VALUES ('$nit', '$name', '$direccion', '$email', '$fecha', '$telefono', '$salones')";
    
        if (mysqli_query($this->conn, $sql)) {
            echo 'Registro insertado exitosamente.';
        } else {
            echo 'Error al insertar el registro: ' . mysqli_error($this->conn);
        }
    }

    public function insertSalon($NIT, $name, $category, $type) {
        $sql = "INSERT INTO salones(universidad_id,nombre,categoria,tipo) values ('$NIT', '$name', '$category','$type')";
        
        if (mysqli_query($this->conn, $sql)) {
            echo 'Registro insertado exitosamente.';
        } else {
            echo 'Error al insertar el registro: ' . mysqli_error($this->conn);
        }
    }

    public function readSalxUni($NIT){
        $sql = "SELECT * FROM universidades WHERE NIT=$NIT";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        } else {
            echo 'Error al listar: ' . mysqli_error($this->conn);
            return null;
        }
    }

    public function readUniversidad() {
        $sql = "SELECT * FROM universidades";
        
        $result = mysqli_query($this->conn, $sql);
        
        if ($result) {
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $data;
        } else {
            echo 'Error al listar: ' . mysqli_error($this->conn);
            return null;
        }
    }

    public function closeConnection() {
        mysqli_close($this->conn);
    }
}
?>