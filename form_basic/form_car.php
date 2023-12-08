<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["license_number"])) {
        $error = "License number is required";
    } else {
        $license_number = $_POST["license_number"];
        $brand = $_POST["brand"];
        $model = $_POST["model"];
        $car_plate = $_POST["car_plate"];
        $km = $_POST["km"];
        $category = $_POST["category"];
        $type = $_POST["type"];
        $comments = $_POST["comments"];
        $discharge_date = $_POST["discharge_date"];
        $color = $_POST["color"];
        $extras = $_POST["extras"];
        $car_image = $_POST["car_image"];
        $price = $_POST["price"];
        $doors = $_POST["doors"];
        $city = $_POST["city"];
        $lat = $_POST["lat"];
        $lng = $_POST["lng"];
        
    }
}
?>
<html>
    <body>
        <h2>Your Form:</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Número de bastidor: <input type="text" name="license_number" required/><br />
            Marca: <input type="text" name="brand" /><br />
            Modelo: <input type="text" name="model" /><br />
            CMatrícula: <input type="text" name="car_plate" /><br />
            KM: <input type="text" name="km" /><br />
            Categoría: <input type="text" name="category" /><br />
            Tipo: <input type="text" name="type" /><br />
            Comentarios: <input type="text" name="comments" /><br />
            Discharge Date: <input type="text" name="discharge_date" /><br />
            Color: <input type="text" name="color" /><br />
            Extras: <input type="text" name="extras" /><br />
            Car Image: <input type="text" name="car_image" /><br />
            Precio: <input type="text" name="price" /><br />
            Puertas: <input type="text" name="doors" /><br />
            Ciudad: <input type="text" name="city" /><br />
            Latitude: <input type="text" name="lat" /><br />
            Longitude: <input type="text" name="lng" /><br />
            <input type="submit" />
        </form>
        <?php
        if (!empty($error)) {
            echo "<p style='color:red;'>$error</p>";
        }
        ?>
        <?php
        echo "<h2>Your Input:</h2>";
        if (isset($license_number)) {
            echo "License Number: $license_number<br>";
        }
        if (isset($brand)) {
            echo "Brand: $brand<br>";
        }
        if (isset($model)) {
            echo "Model: $model<br>";
        }
        if (isset($car_plate)) {
            echo "Car Plate: $car_plate<br>";
        }
        if (isset($km)) {
            echo "KM: $km<br>";
        }
        if (isset($category)) {
            echo "Category: $category<br>";
        }
        if (isset($type)) {
            echo "Type: $type<br>";
        }
        if (isset($comments)) {
            echo "Comments: $comments<br>";
        }
        if (isset($discharge_date)) {
            echo "Discharge Date: $discharge_date<br>";
        }
        if (isset($color)) {
            echo "Color: $color<br>";
        }
        if (isset($extras)) {
            echo "Extras: $extras<br>";
        }
        if (isset($car_image)) {
            echo "Car Image: $car_image<br>";
        }
        if (isset($price)) {
            echo "Price: $price<br>";
        }
        if (isset($doors)) {
            echo "Doors: $doors<br>";
        }
        if (isset($city)) {
            echo "City: $city<br>";
        }
        if (isset($lat)) {
            echo "Latitude: $lat<br>";
        }
        if (isset($lng)) {
            echo "Longitude: $lng<br>";
        }
        ?>
    </body>
</html>