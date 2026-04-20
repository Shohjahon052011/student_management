<?php
include "../config/db.php";
$sql = "SELECT * FROM students";
$data = $conn->prepare($sql);
$data->execute();
$students = $data->fetchAll();
$cnt = 1;
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Students Table</title>
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

<div class="container">

    <div class="header">
        <h2>Students</h2>
        <a href="create.php" class="add-btn">+ Student qo'shish</a>
    </div>

    <table>
        <thead>
            <tr>

                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student): ?>
                 <tr>
                <td><?= $cnt++ ?></td>
                <td><?= $student['first_name'] ?></td>
                <td><?= $student['last_name'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['class_name'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td><?= $student['address'] ?></td>
                <td class="actions">
                    <a href="#" class="btn btn-view">Ko'rish</a>
                    <a href="edit.php?id=<?= $student['id'] ?>" class="btn btn-edit">Tahrirlash</a>
                    <a href="delete.php?id=<?= $student['id'] ?> ?>" class="btn-delete" onclick="return confirm('Ochirasizmi!')">O'chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>
