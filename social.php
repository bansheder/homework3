<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты | Tall Tales Workshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Nunito:wght@400;600&family=Jost:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <style>
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            font-family: 'Jost', sans-serif;
            font-size: 2.5rem;
            color: #4e342e; 
            text-align: center;
            margin-bottom: 20px;
            transition: 0.5s ease;
        }
h2:hover{
    color: #b16445; 
}
        .contact-container form label {
            display: block;
            margin: 10px 0 5px;
            color: #4e342e;
        }

        .contact-container form input, 
        .contact-container form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: 'Nunito', sans-serif;
        }

        .contact-container button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #6d4c41; 
            color: #fff;
            font-size: 1rem;
            font-family: 'Nunito', sans-serif;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-container button:hover {
            background-color: #b16445;
        }
    </style>
</head>
<body>

    <?php include '../nav.php'; ?>

    <div class="contact-container">
        <h2>Свяжитесь с нами</h2>
        <p>Вы можете оставить заявку на заказ, заполнив форму ниже:</p>
        <form action="send_message.php" method="post">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Отправить сообщение</button>
        </form>
    </div>

    <?php include '../footer.php'; ?>

</body>
</html>