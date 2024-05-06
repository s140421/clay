<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB3700"; 

// Create DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to $dbname<br />";
}
?>
