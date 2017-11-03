
<?php
$servername = "localhost";
$username = "root";
$password = "qwerty123";
$db_name = "bulka_shop_db";
// Create connection
$connection_to_db = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($connection_to_db->connect_error) {
    die("Connection failed: " . $connection_to_db->connect_error);
} else{
echo "Connected successfully";
}
mysqli_set_charset($connection_to_db, "utf8");
?>