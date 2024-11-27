<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея изделий | Tall Tales Workshop</title>
    <link type="image/x-icon" href="images/icon.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="../styles/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <style>
        .gallery-container {
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 30px;
            color: #d2b48c;
        }

        .gallery-header h1 {
            font-family: 'Jost', sans-serif;
            font-size: 2.5rem;
            color:#4b2e2b; 
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .gallery-header h1:hover {
            color: #a0522d;
        }

        .gallery-header p {
            color: #8b4513; 
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 300px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            background: rgba(90, 58, 34, 0.7); 
            color: #fafafa;
            text-align: center;
            font-size: 1rem;
            font-family: 'Nunito', sans-serif;
            opacity: 0;
            transition: opacity 0.5s ease;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 10px;
        }

        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }

        .order-button {
            display: block;
            width: 200px;
            margin: 30px auto 50px; 
            padding: 15px;
            font-size: 1.1rem;
            font-family: 'Jost', sans-serif;
            text-align: center;
            background-color: #8b4513;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .order-button:hover {
            background-color: #a0522d;
        }
    </style>
</head>

<body>
    <?php include '../nav.php'; ?>
    <div class="gallery-container">
        <div class="gallery-header">
            <h1>Галерея изделий</h1>
            <p>Наши уникальные работы для клиентов, выполненные с душой и мастерством.</p>
        </div>
        <div class="gallery-grid">
            <?php
            $works = [
                ["image" => "../images/work1.jpeg", "caption" => "Ростовая кукла: Герой праздника"],
                ["image" => "../images/work2.jpeg", "caption" => "Сказочный персонаж"],
                ["image" => "../images/work3.jpeg", "caption" => "Костюм аниматора"],
                ["image" => "../images/work4.jpeg", "caption" => "Тематический костюм для праздника"],
                ["image" => "../images/work5.jpeg", "caption" => "Брендированный персонаж"],
                ["image" => "../images/work6.jpeg", "caption" => "Кукла для корпоративного мероприятия"],
                ["image" => "../images/work7.jpeg", "caption" => "Воплощение идей для больших событий"],
                ["image" => "../images/work8.jpeg", "caption" => "Яркий элемент вашего праздника"]
            ];

            foreach ($works as $work) {
                echo '
                <div class="gallery-item">
                    <img src="' . $work["image"] . '" alt="' . $work["caption"] . '">
                    <div class="gallery-caption">' . $work["caption"] . '</div>
                </div>';
            }
            ?>
        </div>
        <a href="../pages/social.php" class="order-button">ЗАКАЗАТЬ</a>
    </div>

    <!-- Футер -->
    <?php include '../footer.php'; ?>

</body>

</html>
