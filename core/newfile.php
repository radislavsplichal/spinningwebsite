<?php
$servername = "192.168.0.129:3306";
$username = "ajsports";
$password = "Rachel2077Nicols1*";
$dbname = "AJSPORTS";
# Fill our vars and run on cli
# $ php -f db-connect-test.php

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

