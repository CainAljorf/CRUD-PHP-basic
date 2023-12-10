<?php
    // Preparación de variables de entorno para la conexión a la base de datos
    // $db_host = getenv('DB_HOST');
    // $db_name = getenv('DB_NAME');
    // $db_password = getenv('DB_PASSWORD');
    // $db_user = getenv('DB_USER');
    // $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    $conn = new mysqli('cochescain.net', 'root', 'camarber1', 'cars');

    if ($conn->connect_error) {
        die('Error de Conexión (' . $conn->connect_errno . ') '
                . $conn->connect_error);
    }else{
        echo 'Conexión correcta a ' . $conn->host_info . "\n";
    }
?>