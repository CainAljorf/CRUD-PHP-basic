<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
mysqli_set_charset($mysqli, "utf8");
$result = mysqli_query($mysqli, "SELECT * FROM cars ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
    <head>	
        <title>Homepage</title>
        <meta charset="utf-8">
    </head>

    <body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td>License Number</td>
        <td>Brand</td>
        <td>Model</td>
        <td>Car Plate</td>
        <td>KM</td>
        <td>Category</td>
        <td>Type</td>
        <td>Comments</td>
        <td>Discharge Date</td>
        <td>Color</td>
        <td>Extras</td>
        <td>Car Image</td>
        <td>Price</td>
        <td>Doors</td>
        <td>City</td>
        <td>Latitude</td>
        <td>Longitude</td>
        <td>Update</td>
    </tr>
    <?php 
    while($res = mysqli_fetch_array($result)) { 		
        echo "<tr>";
        echo "<td>".$res['license_number']."</td>";
        echo "<td>".$res['brand']."</td>";
        echo "<td>".$res['model']."</td>";
        echo "<td>".$res['car_plate']."</td>";
        echo "<td>".$res['km']."</td>";
        echo "<td>".$res['category']."</td>";
        echo "<td>".$res['type']."</td>";
        echo "<td>".$res['comments']."</td>";
        echo "<td>".$res['discharge_date']."</td>";
        echo "<td>".$res['color']."</td>";
        echo "<td>".$res['extras']."</td>";
        echo "<td>".$res['car_image']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td>".$res['doors']."</td>";
        echo "<td>".$res['city']."</td>";
        echo "<td>".$res['lat']."</td>";
        echo "<td>".$res['lng']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
    }
    include 'debug.php';
    $data = 'Eso es el console_log';
    console_log($data);
	?>
	</table>
</body>
</html>
