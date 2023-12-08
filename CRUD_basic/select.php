<?php
    include 'connect.php';
    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>license_number</th>";
        echo "<th>brand</th>";
        echo "<th>model</th>";
        echo "<th>car_plate</th>";
        echo "<th>km</th>";
        echo "<th>category</th>";
        echo "<th>type</th>";
        echo "<th>comments</th>";
        echo "<th>discharge_date</th>";
        echo "<th>color</th>";
        echo "<th>extras</th>";
        echo "<th>car_image</th>";
        echo "<th>price</th>";
        echo "<th>doors</th>";
        echo "<th>city</th>";
        echo "<th>lat</th>";
        echo "<th>lng</th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['license_number'] . "</td>";
            echo "<td>" . $row['brand'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['car_plate'] . "</td>";
            echo "<td>" . $row['km'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "<td>" . $row['comments'] . "</td>";
            echo "<td>" . $row['discharge_date'] . "</td>";
            echo "<td>" . $row['color'] . "</td>";
            echo "<td>" . $row['extras'] . "</td>";
            echo "<td>" . $row['car_image'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['doors'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['lat'] . "</td>";
            echo "<td>" . $row['lng'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "No hay resultados.";
    }
    $conn->close();
?>