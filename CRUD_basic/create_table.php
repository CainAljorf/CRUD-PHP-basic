<?php
include 'connect.php';
$sql = "CREATE TABLE IF NOT EXISTS `cars` (
    `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
    `license_number` varchar(17) NOT NULL,
    `brand` varchar(100) NOT NULL,
    `model` varchar(100) NOT NULL,
    `car_plate` varchar(7) NOT NULL,
    `km` int NOT NULL,
    `category` varchar(100) NOT NULL,
    `type` varchar(100) NOT NULL,
    `comments` varchar(1000) NOT NULL,
    `discharge_date` varchar(10) NOT NULL,
    `color` varchar(1000) NOT NULL,
    `extras` varchar(1000) NOT NULL,
    `car_image` varchar(1000) NOT NULL,
    `price` longtext NOT NULL,
    `doors` int NOT NULL,
    `city` varchar(100) NOT NULL,
    `lat` varchar(1000) NOT NULL,
    `lng` varchar(1000) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
if($conn->query($sql)===TRUE){
    echo "Tabla existente o creada correctamente.\n";
}else{
    echo "Error creando la tabla: " . $conn->error . "\n";
}
$conn->close();
?>