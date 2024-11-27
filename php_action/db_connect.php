<?php 	

$localhost = "localhost";
$username = "keerthi";
$password = "Admin@2211";
$dbname = "store";
$store_url = "http://34.229.228.77/ims/";
//$store_url = "http://kssolutions.co.in/ims/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
 // echo "Successfully connected";
}

?>
