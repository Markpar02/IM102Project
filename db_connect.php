<?php
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "user_management"

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
