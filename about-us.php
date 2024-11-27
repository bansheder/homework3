<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Tall Tales Workshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Nunito:wght@400;600&family=Jost:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/about.css"> 
</head>
<body>
    <header>
        <?php include '../nav.php'; ?>
    </header>

    <div class="container">
        <div class="text">
            <h2>О нас</h2>
            <p>Tall Tales Workshop — это мастерская, специализирующаяся на создании ростовых кукол под заказ. Мы стремимся создавать уникальные и высококачественные изделия, которые вдохновляют и развлекают.</p>
        </div>
    </div>

    <div class="blocks-container">
        <?php
        $blocks = [
            [
                "image" => "../images/1.jpeg",
                "alt" => "Процесс создания кукол",
                "title" => "Процесс создания кукол",
                "text" => "Наши мастера используют лучшие материалы и технологии, чтобы создать уникальные кукол. Каждый этап — от концепции до финальной отделки — важен для нас."
            ],
            [
                "image" => "../images/2.jpeg",
                "alt" => "Дизайн кукол",
                "title" => "Дизайн кукол",
                "text" => "Мы создаем оригинальные дизайны, которые отражают идеи наших клиентов. Наша команда дизайнеров работает над каждым проектом с большой внимательностью и любовью."
            ],
            [
                "image" => "../images/3.png",
                "alt" => "События с куклами",
                "title" => "События с куклами",
                "text" => "Мы также принимаем участие в различных мероприятиях, где наши куклы развлекают зрителей и добавляют волшебство в каждое событие."
            ]
        ];

        foreach ($blocks as $block) {
            echo '
            <div class="block">
                <img src="' . $block["image"] . '" alt="' . $block["alt"] . '" class="block-image">
                <div class="block-text">
                    <h3>' . $block["title"] . '</h3>
                    <p>' . $block["text"] . '</p>
                </div>
            </div>';
        }
        ?>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>
