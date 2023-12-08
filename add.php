<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
    <?php
    //including the database connection file
    include_once("config.php");

    if(isset($_POST['Submit'])) {	
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
            
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else { 
            // if all the fields are filled (not empty) 
                
            //insert data to database	
            $result = mysqli_query($mysqli, "INSERT INTO cars(license_number, brand, model, car_plate, km, category, type, comments, discharge_date, color, extras, car_image, price, doors, city, lat, lng) VALUES('$license_number', '$brand', '$model', '$car_plate', '$km', '$category', '$type', '$comments', '$discharge_date', '$color', '$extras', '$car_image', '$price', '$doors', '$city', '$lat', '$lng')");
            
            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='index.php'>View Result</a>";
        }
    }
    ?>
    </body>
</html>
