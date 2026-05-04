<?php
include "../config/db.php";
$sql = "SELECT * FROM classes";
$data = $conn->prepare($sql);
$data->execute();
$classes = $data->fetchAll();
$cnt = 1;
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Classes Table</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h2 {
            margin: 0;
        }

        .btn {
            padding: 8px 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-add {
            background: #28a745;
            color: white;
        }

        .btn-view {
            background: #17a2b8;
            color: white;
        }

        .btn-edit {
            background: #ffc107;
            color: black;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #007bff;
            color: white;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        .actions button {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <?php include "../layouts/header.php"?>

<div class="container">

    <div class="header">
        <h2>Classes</h2>
        <a href="create.php" class="add-btn">+ Class qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Class_name</th>
                <th>Teacher_id</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($classes as $class): ?>
                 <tr>
                <td><?= $cnt++ ?></td>
                <td><?= $class['class_name'] ?></td>
                <td><?= $class['teacher_id'] ?></td>
                <td class="actions">
                    <a href="show.php?id=<?= $class['id'] ?>" class="btn btn-view">Ko'rish</a>
                    <a href="edit.php?id=<?= $class['id'] ?>" class="btn btn-edit">Tahrirlash</a>
                    <a href="delete.php?id=<?= $class['id'] ?>" class="btn-delete" onclick="return confirm('Ochirasizmi!')">O'chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>
