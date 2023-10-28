

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full-name"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "user_management";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (full_name, address, contact, company, email, password) VALUES ('$full_name', '$address', '$contact', '$company', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: registration_success.php"); // Redirect to registration success page
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

