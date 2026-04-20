<?php
include "../config/db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);
$student = $data->fetch()
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentni tahrirlash</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #007bff;
        }

        textarea {
            resize: none;
            height: 70px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Student qo'shish</h2>
    <form action="update.php" method="POST">
                <div class="form-group">
            <input type="hidden" name="id" value="<?= $student['id']?>" required>
        </div>
        
        <div class="form-group">
            <label>Ism (First Name)</label>
            <input type="hidden" name="first_name" value="<?= $student['first_name'] ?>" required>
        </div>

        <div class="form-group">
            <label>Familiya (Last Name)</label>
            <input type="text" name="last_name" value="<?= $student['last_name'] ?>" required>
        </div>

        <div class="form-group">
            <label>Yosh (Age)</label>
            <input type="number" name="age" value="<?= $student['age'] ?>" required>
        </div>

        <div class="form-group">
            <label>Sinf (Class Name)</label>
            <input type="text" name="class_name" value="<?= $student['class_name'] ?>" required>
        </div>

        <div class="form-group">
            <label>Telefon (Phone)</label>
            <input type="tel" name="phone" value="<?= $student['phone'] ?>" required>
        </div>

        <div class="form-group">
            <label>Manzil (Address)</label>
            <textarea name="address" required><?= $student['address'] ?></textarea>
        </div>

        <button type="submit" class="btn">Saqlash</button>

    </form>
</div>
