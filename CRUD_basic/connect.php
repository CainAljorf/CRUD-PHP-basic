<?php
    // $db_password = getenv('DB_PASSWORD');

    $conn = new mysqli('cochescain.net', 'root', 'camarber1', 'cars');

    if ($conn->connect_error) {
        die('Error de Conexión (' . $conn->connect_errno . ') '
                . $conn->connect_error);
    }else{
        echo 'Conexión correcta a ' . $conn->host_info . "\n";
    }
?>