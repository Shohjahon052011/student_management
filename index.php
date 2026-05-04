<?php 
include 'config/db.php'
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Menyu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #2c3e50;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #ecf0f1;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: 0.3s;
        }

        .navbar a:hover {
            background-color: #3498db;
            color: white;
        }

        /* Content */
        .content {
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="/students/index.php">Student</a>
        <a href="/teachers/index.php">Teacher</a>
        <a href="/classes/index.php">Classes</a>
    </div>

</body>
</html>