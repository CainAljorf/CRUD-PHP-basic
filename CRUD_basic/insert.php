<?php
    include 'connect.php';
    $sql = "INSERT INTO `cars` (`license_number`, `brand`, `model`, `car_plate`, `km`, `category`, `type`, `comments`, `discharge_date`, `color`, `extras`, `car_image`, `price`, `doors`, `city`, `lat`, `lng`) VALUES
    ('1234ABC', 'Audi', 'A4', '1234ABC', 100000, 'Sedan', 'Gasolina', 'Coche en perfecto estado', '2019-01-01', 'Rojo', 'Aire acondicionado, Navegador, Asientos de cuero', 'https://www.audiusa.com/content/dam/audiusa/hub/Models/A4/2020/my20-a4-sedan-colorizer-tango-red.png?imwidth=960', '10000', 5, 'Madrid', '40.4167754', '-3.7037902'),
    ('2345BCD', 'BMW', 'Serie 3', '2345BCD', 200000, 'Sedan', 'Gasolina', 'Coche en perfecto estado', '2019-01-01', 'Azul', 'Aire acondicionado, Navegador, Asientos de cuero', 'https://www.bmw.es/content/dam/bmw/common/all-models/3-series/sedan/2018/navigation/bmw-3-series-sedan-navigation-desktop.jpg', '20000', 5, 'Barcelona', '41.3850639', '2.1734035'),
    ('3456CDE', 'Mercedes', 'Clase C', '3456CDE', 300000, 'Sedan', 'Gasolina', 'Coche en perfecto estado', '2019-01-01', 'Verde', 'Aire acondicionado, Navegador, Asientos de cuero', 'https://www.mercedes-benz.es/passengercars/mercedes-benz-cars/models/c-class/saloon-w-205/_jcr_content/image.MQ6.2.2x.20190618121618.png', '30000', 5, 'Valencia', '39.4699075', '-0.3762881'),
    ('4567DEF', 'Audi', 'A6', '4567DEF', 400000, 'Sedan', 'Gasolina', 'Coche en perfecto estado', '2019-01-01', 'Amarillo', 'Aire acondicionado, Navegador, Asientos de cuero', 'https://www.audiusa.com/content/dam/audiusa/hub/Models/A6/2020/my20-a6-sedan-colorizer-glacier-white.png?imwidth=960', '40000', 5, 'Sevilla', '37.3890924', '-5.9844589'),
    ('5678EFG', 'BMW', 'Serie 5', '5678EFG', 500000, 'Sedan', 'Gasolina', 'Coche en perfecto estado', '2019-01-01', 'Rojo', 'Aire acondicionado, Navegador, Asientos de cuero', 'https://www.bmw.es/content/dam/bmw/common/all-models/5-series/sedan/2016/navigation/BMW-5er-Sedan-Navigation-Desktop.jpg', '50000', 5, 'Zaragoza', '41.6488226', '-0.8890853');";
    echo "Muestra el error porque license_number(alias num_bastidor) se ha declarado como UNIQUE en la tabla cars. Por lo cual este insert solo se puede realizar una vez para evitar redundancias aunque la clave primaria sea autoincremental.\n";
    if($conn->query($sql)===TRUE){
        echo "Datos insertados correctamente.\n";
    }else{
        echo "Error insertando datos: " . $conn->error . "\n";
    }
    echo "Muestra el error porque license_number se ha declarado como UNIQUE en la tabla cars.\n";
    $conn->close();
?>