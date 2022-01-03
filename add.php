<?php
//declare 
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$productType = $_POST['productType'];
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];

//connect to db
include "connect.php";
//insert items to db
$sql = "INSERT INTO products(sku, name, price, productType, size, weight, height, width, length) values('$sku','$name','$price','$productType','$size','$weight','$height','$width','$length')";

if ($con->query($sql) === TRUE) {
	//echo "ADDED: " . $sku . ", " . $name . ", " . $price, ".$productType.", ".$size.", ".$weight.", ".$height.", ".$width.", ".$length.";		
} else {
	echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
header("Location: ./index.php", TRUE, 301);
exit();
