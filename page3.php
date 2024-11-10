<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
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
            display: flex;
            justify-content: center;
        }

        nav ul {
            list-style: none;
            display: flex;
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

        /* Highlight Logout in red */
        nav ul li a[href="login.php"] {
            color: #ff0000;
        }

        nav ul li a[href="login.php"]:hover {
            color: #ff6666;
        }

        /* Content section */
        .content {
            text-align: center;
            padding: 3em 0;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 1em;
        }

        h3 {
            color: #333;
            font-size: 1.5em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="page1.php">Page 1</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="page3.php">Page 3</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>

    <div class="content">
        <h1>Welcome to Page 3</h1>
        <h3>This is where your page content goes.</h3>
    </div>

</body>
</html>
