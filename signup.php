<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 95px; /* Add padding to create space at the top and bottom */
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .center-button {
            display: flex;
            justify-content: center;
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
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
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
        
        .login-link {
            text-align: center;
        }

        .login-link a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;

        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signup_action.php" method="post">
            <label for="full-name">Full Name:</label>
            <input type="text" name="full-name" id="full-name">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address">
            <label for="contact">Contact Number:</label>
            <input type="tel" name="contact" id="contact">
            <label for="company">Company Name:</label>
            <input type="text" name="company" id="company">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <div class="center-button">
                <input type="submit" value="Signup">
            </div>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
