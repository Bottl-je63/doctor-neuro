<?php
$servername = "localhost";
$database = "doctor";
$username = "root";
$password = "";

// Establishing a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// header("Location: http://localhost/doctor");
// exit();
?>
