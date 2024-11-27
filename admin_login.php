<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход для администратора</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Nunito:wght@400;600&family=Jost:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .contact-container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-container h1 {
            text-align: center;
            color: #6f4f37; 
            font-size: 24px;
            margin-bottom: 30px;
        }

        .contact-container label {
            font-size: 14px;
            color: #6f4f37; 
            margin-bottom: 8px;
            display: block;
        }

        .contact-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }

        .contact-container button {
            width: 100%;
            padding: 12px;
            background-color: #6f4f37; 
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-container button:hover {
            background-color: #d6c1a5; 
        }

        .contact-container form {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
<?php include '../nav.php'; ?>
    <div class="contact-container">
        <h1>Вход для администратора</h1>
        <form action="admin.php" method="post">
            <label for="username">Логин:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Войти</button>
        </form>
    </div>

</body>
</html>