<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // Rename to dbpassword to avoid overwriting the variable
    $dbname = "user_management"; // Replace with your database name

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Password is correct, set session and redirect to index.php
            $_SESSION["user_id"] = $row["id"];
            header("Location: index.php"); // Redirect to the index page
            exit(); // Make sure to exit to prevent further script execution
        } else {
            $_SESSION['login_error'] = "Incorrect password. Input password: $password, Hashed password in DB: {$row['password']}";
            header("Location: login.php"); // Redirect back to the login page
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found.";
        header("Location: login.php"); // Redirect back to the login page
        exit();
    }

    $conn->close();
}
?>
