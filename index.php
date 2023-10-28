<!DOCTYPE html>
<html>
<head>
    <title>Your Website Name</title>
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
        <h1>Your Website Name</h1>
    </header>

    <div class="container">
        <h2>Welcome to Your Website</h2>
        <p>Welcome to the official website of Your Company. Explore our services and get in touch with us. We are here to assist you.</p>
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
