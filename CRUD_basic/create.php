<?php
include 'connect.php';
$dbname = 'cars';
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if($conn->query($sql)===TRUE){
    echo "Base de datos existente o creada correctamente.\n";
}else{
    echo "Error creating database: " . $conn->error . "\n";
}
$conn->close();
?>