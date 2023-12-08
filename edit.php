<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    
    $license_number = mysqli_real_escape_string($mysqli, $_POST['license_number']);
    $brand = mysqli_real_escape_string($mysqli, $_POST['brand']);
    $model = mysqli_real_escape_string($mysqli, $_POST['model']);
    $car_plate = mysqli_real_escape_string($mysqli, $_POST['car_plate']);
    $km = mysqli_real_escape_string($mysqli, $_POST['km']);
    $category = mysqli_real_escape_string($mysqli, $_POST['category']);
    $type = mysqli_real_escape_string($mysqli, $_POST['type']);
    $comments = mysqli_real_escape_string($mysqli, $_POST['comments']);
    $discharge_date = mysqli_real_escape_string($mysqli, $_POST['discharge_date']);
    $color = mysqli_real_escape_string($mysqli, $_POST['color']);
    $extras = mysqli_real_escape_string($mysqli, $_POST['extras']);
    $car_image = mysqli_real_escape_string($mysqli, $_POST['car_image']);
    $price = mysqli_real_escape_string($mysqli, $_POST['price']);
    $doors = mysqli_real_escape_string($mysqli, $_POST['doors']);
    $city = mysqli_real_escape_string($mysqli, $_POST['city']);
    $lat = mysqli_real_escape_string($mysqli, $_POST['lat']);
    $lng = mysqli_real_escape_string($mysqli, $_POST['lng']);
	// checking empty fields
	if(empty($license_number) || empty($brand) || empty($model) || empty($car_plate) || empty($km) || empty($category) || empty($type) || empty($comments) || empty($discharge_date) || empty($color) || empty($extras) || empty($car_image) || empty($price) || empty($doors) || empty($city) || empty($lat) || empty($lng)) {	

		if(empty($license_number)) {
            echo "<font color='red'>License number field is empty.</font><br/>";
		}		
        if(empty($brand)) {
            echo "<font color='red'>Brand field is empty.</font><br/>";
        }
        if(empty($model)) {
            echo "<font color='red'>Model field is empty.</font><br/>";
        }
        if(empty($car_plate)) {
            echo "<font color='red'>Car plate field is empty.</font><br/>";
        }
        if(empty($km)) {
            echo "<font color='red'>KM field is empty.</font><br/>";
        }
        if(empty($category)) {
            echo "<font color='red'>Category field is empty.</font><br/>";
        }
        if(empty($type)) {
            echo "<font color='red'>Type field is empty.</font><br/>";
        }
        if(empty($comments)) {
            echo "<font color='red'>Comments field is empty.</font><br/>";
        }
        if(empty($discharge_date)) {
            echo "<font color='red'>Discharge date field is empty.</font><br/>";
        }
        if(empty($color)) {
            echo "<font color='red'>Color field is empty.</font><br/>";
        }
        if(empty($extras)) {
            echo "<font color='red'>Extras field is empty.</font><br/>";
        }
        if(empty($car_image)) {
            echo "<font color='red'>Car image field is empty.</font><br/>";
        }
        if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
        if(empty($doors)) {
            echo "<font color='red'>Doors field is empty.</font><br/>";
        }
        if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }
        if(empty($lat)) {
            echo "<font color='red'>Latitude field is empty.</font><br/>";
        }
        if(empty($lng)) {
            echo "<font color='red'>Longitude field is empty.</font><br/>";
        }

	} else {	
		//updating the table
        $result = mysqli_query($mysqli, "UPDATE cars SET license_number='$license_number',brand='$brand',model='$model',car_plate='$car_plate',km='$km',category='$category',type='$type',comments='$comments',discharge_date='$discharge_date',color='$color',extras='$extras',car_image='$car_image',price='$price',doors='$doors',city='$city',lat='$lat',lng='$lng' WHERE id=$id");
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM cars WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $license_number = $res['license_number'];
    $brand = $res['brand'];
    $model = $res['model'];
    $car_plate = $res['car_plate'];
    $km = $res['km'];
    $category = $res['category'];
    $type = $res['type'];
    $comments = $res['comments'];
    $discharge_date = $res['discharge_date'];
    $color = $res['color'];
    $extras = $res['extras'];
    $car_image = $res['car_image'];
    $price = $res['price'];
    $doors = $res['doors'];
    $city = $res['city'];
    $lat = $res['lat'];
    $lng = $res['lng'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr> 
            <td>License Number</td>
            <td><input type="text" name="license_number" value="<?php echo $license_number;?>"></td>
        </tr>
        <tr> 
            <td>Brand</td>
            <td><input type="text" name="brand" value="<?php echo $brand;?>"></td>
        </tr>
        <tr> 
            <td>Model</td>
            <td><input type="text" name="model" value="<?php echo $model;?>"></td>
        </tr>
        <tr> 
            <td>Car Plate</td>
            <td><input type="text" name="car_plate" value="<?php echo $car_plate;?>"></td>
        </tr>
        <tr> 
            <td>KM</td>
            <td><input type="text" name="km" value="<?php echo $km;?>"></td>
        </tr>
        <tr> 
            <td>Category</td>
            <td><input type="text" name="category" value="<?php echo $category;?>"></td>
        </tr>
        <tr> 
            <td>Type</td>
            <td><input type="text" name="type" value="<?php echo $type;?>"></td>
        </tr>
        <tr> 
            <td>Comments</td>
            <td><input type="text" name="comments" value="<?php echo $comments;?>"></td>
        </tr>
        <tr> 
            <td>Discharge Date</td>
            <td><input type="text" name="discharge_date" value="<?php echo $discharge_date;?>"></td>
        </tr>
        <tr> 
            <td>Color</td>
            <td><input type="text" name="color" value="<?php echo $color;?>"></td>
        </tr>
        <tr> 
            <td>Extras</td>
            <td><input type="text" name="extras" value="<?php echo $extras;?>"></td>
        </tr>
        <tr> 
            <td>Car Image</td>
            <td><input type="text" name="car_image" value="<?php echo $car_image;?>"></td>
        </tr>
        <tr> 
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price;?>"></td>
        </tr>
        <tr> 
            <td>Doors</td>
            <td><input type="text" name="doors" value="<?php echo $doors;?>"></td>
        </tr>
        <tr> 
            <td>City</td>
            <td><input type="text" name="city" value="<?php echo $city;?>"></td>
        </tr>
        <tr> 
            <td>Latitude</td>
            <td><input type="text" name="lat" value="<?php echo $lat;?>"></td>
        </tr>
        <tr> 
            <td>Longitude</td>
            <td><input type="text" name="lng" value="<?php echo $lng;?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
