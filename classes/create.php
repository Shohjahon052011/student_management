<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Class qo'shish</title>
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
    <h2>Class qo'shish</h2>
    <form action="store.php" method="POST">
        
        <div class="form-group">
            <label> Class Name</label>
            <input type="text" name="class_name" required>
        </div>

        <div class="form-group">
            <label> Teacher_id</label>
            <input type="text" name="teacher_id" required>
        </div>
        
        <button type="submit" class="btn">Saqlash</button>

    </form>
</div>
</body>