<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navigation bar */
        nav {
            background-color: #333;
            padding: 1em 0;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 2em;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Highlighted Logout Button */
        nav ul li a.logout {
            background-color: #ff4d4d; /* Red */
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            transition: background-color 0.3s;
        }

        nav ul li a.logout:hover {
            background-color: #e60000; /* Darker Red */
        }

        /* Welcome Banner - Light Blue Background */
        .banner {
            background-color: #add8e6; /* Light Blue */
            color: white;
            padding: 40px;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Content */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="page3.php">Page 3</a></li>
            <li><a href="login.php" class="logout">Logout</a></li> <!-- Logout button -->
        </ul>
    </nav>

    <!-- Welcome Banner -->
    <div class="banner">
        <h1>Welcome to the Home Page</h1>
        <p>We're glad to have you here!</p>
    </div>

    <!-- Main Content -->
    <div class="content">
        <?php
        $name = "AICHA";
        echo "<h2>Hello, $name!</h2>";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, mauris non vulputate euismod, purus lacus volutpat urna, eget iaculis neque nunc vel neque. Integer vitae placerat erat. Donec ac felis ut libero sollicitudin dapibus. Donec scelerisque fermentum sem, id consequat nulla iaculis eget. Aliquam erat volutpat. Curabitur tempus, metus id sodales lobortis, risus erat maximus odio, at porttitor felis urna ac arcu.</p>";
        ?>
    </div>


</body>
</html>
