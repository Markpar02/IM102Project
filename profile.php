<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";

session_start();

// Define the variables to store user information
$name = '';
$address = '';
$contact = '';
$company = '';
$email = '';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Database connection code here
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to retrieve user data
    $sql = "SELECT * FROM users WHERE id = $user_id";

    // Execute the SQL query
    $result = $conn->query($sql);

    if (!$result) {
        echo "Database query error: " . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Assign user data from the custom database to variables
        // Make sure column names match your table structure
        $name = $row["full_name"];
        $address = $row["address"];
        $contact = $row["contact"];
        $company = $row["company"];
        $email = $row["email"];
    } else {
        echo "User not found in the custom database.";
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css"> <!-- You can link to your stylesheet here if you have one -->
    <style>
        /* Your existing styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-left: 50px; /* Add left margin to clear the sidebar */
            transition: margin-left 0.3s; /* Add transition for smooth animation */
        }

        .sidebar {
            width: 50px;
            background-color: #333;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            transition: width 0.3s;
        }

        #sidebar-button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            display: block;
            width: 100%;
        }

        .sidebar a {
            display: none;
            margin: 10px 0;
            color: #fff;
            text-decoration: none;
        }

        /* Sidebar expanded style */
        .sidebar.expanded {
            width: 250px;
        }

        .container.expanded {
            margin-left: 250px;
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <button id="sidebar-button">☰</button>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </div>

    <header>
        <h1>My Profile</h1>
    </header>

    <div class="container">
        <?php
        if (isset($_SESSION['user_id'])) {
            // Display user's profile information if logged in
            echo "<section id='personal-info'>";
            echo "<h2>Personal Information</h2>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "<p><strong>Contact:</strong> $contact</p>";
            echo "<p><strong>Company:</strong> $company</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "</section>";
        }
        ?>
    </div>

    <script>
        var sidebar = document.getElementById("sidebar");
        var button = document.getElementById("sidebar-button");
        var links = sidebar.getElementsByTagName("a");

        button.addEventListener("click", function() {
            sidebar.classList.toggle("expanded");
            var container = document.querySelector(".container");
            container.classList.toggle("expanded");

            for (var i = 0; i < links.length; i++) {
                links[i].style.display = (sidebar.classList.contains("expanded")) ? "block" : "none";
            }
        });
    </script>
</body>
</html>
