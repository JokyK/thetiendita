<?php
// Conectar a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tienditadb";
        
        $conexion = new mysqli($servername, $username, $password, $dbname);
        
        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }
?>