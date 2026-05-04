<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id =?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$class = $data->fetch();
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Class ma'lumotlari</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            width: 420px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .card h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 12px;
            padding: 10px;
            background: #f9f9f9;
            border-radius: 6px;
        }

        .label {
            font-weight: bold;
            color: #555;
            font-size: 14px;
        }

        .value {
            margin-top: 3px;
            font-size: 16px;
            color: #222;
        }

        .actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }

        .back {
            background: #6c757d;
            color: white;
        }

        .edit {
            background: #007bff;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <?php include "../layouts/header.php"?>
<div class="card">
    <h2>Class ma'lumotlari</h2>

    <div class="info">
        <div class="label">Ism</div>
        <div class="value"><?= $class['class_name'] ?></div>
    </div>

    <div class="info">
        <div class="label">Familiya</div>
        <div class="value"><?= $class['teacher_id'] ?></div>
    </div>
    
</div>

</body>
</html>
