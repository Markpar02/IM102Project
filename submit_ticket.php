<?php
// Connect to your MySQL database here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST["customer_name"];
    $subject = $_POST["subject"];
    $description = $_POST["description"];

    // Insert ticket data into the database (you need to establish a database connection here)

    // Redirect back to the customer portal or show a confirmation message
    header("Location: index.php");
}
?>
