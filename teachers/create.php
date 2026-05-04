<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Teachers qo'shish</title>
    <link rel="stylesheet" href="..assets/style.css">
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
    <?php include "../layouts/header.php"?>
<div class="form-container">
    <h2>Teachers qo'shish</h2>
    <form action="store.php" method="POST">
        
        <div class="form-group">
            <label>Ism (First Name)</label>
            <input type="ism" name="first_name" required>
        </div>

        <div class="form-group">
            <label>Familiya (Last Name)</label>
            <input type="familya" name="last_name" required>
        </div>

        <div class="form-group">
            <label>Fan (Subject)</label>
            <input type="fan" name="subject" required>
        </div>

        <div class="form-group">
            <label>Telefon (Phone)</label>
            <input type="telefon" name="phone" required>
        </div>

        <div class="form-group">
            <label>Manzil (Address)</label>
            <input type="manzil" name="address" required>
        </div>

        <div class="form-group">
            <label>Tajriba yili (Experience)</label>
            <textarea type="tajriba yili" name="experience" required></textarea>
        </div>
        <button type="submit" class="btn">Saqlash</button>

    </form>
</div>