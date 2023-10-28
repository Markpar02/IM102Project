<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .center-button {
            display: flex;
            justify-content: center;
        }

        .signup-link {
            text-align: center;
        }

        .signup-link a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
        // Display error message if it exists
        if (isset($_SESSION['login_error'])) {
            echo '<div class="error">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']); // Clear the error message
        }
        ?>
        <form action="login_action.php" method="post">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <div class="center-button">
                <input type="submit" value="Login">
            </div>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</body>
</html>
