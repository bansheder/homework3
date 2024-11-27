<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Tall Tales Workshop</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Nunito:wght@400;600&family=Jost:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/about.css"> 
    <style>
        #schedule {
            display: flex;
            overflow-x: auto;
        }

        .day {
            margin-top: 20px;
            flex: 1;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            background-color: #ffe6ce;
            transition: background-color 0.3s ease;
        }

        .day:hover {
            background-color: rgb(56, 26, 14);
            color: #fff;
        }

        #location-container {
    display: flex;
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9; 
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
   
}

#map {
    flex: 1;
    height: 300px; 
    border-radius: 10px;
    overflow: hidden;
    border: 2px solid #bd7e4a; 
}

#address {
    flex: 1;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-left: 20px;
    border: 2px solid #bd7e4a; 
}

#address h2 {
    color: #bd7e4a; 
}

#address p {
    color: #333;
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 10px;
}

        .btw h1 {
            font-size: 32px;
            color: #6d4c41;
            text-align: center;
            margin-bottom: 10px;
        }

        .btw p {
            font-size: 16px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        #opening, #location {
            padding: 30px 0;
        }
    </style>
</head>
<body>
        <?php include '../nav.php'; ?>
    <section id="opening">
        <div class="btw">
            <h1 class="title">Режим работы</h1>
            <p>Приходите к нам в любое удобное время в рабочие часы.</p>
        </div>
        <div id="schedule">
            <?php
            $schedule = [
                "Пн" => "10:00 - 18:00",
                "Вт" => "10:00 - 18:00",
                "Ср" => "10:00 - 18:00",
                "Чт" => "10:00 - 18:00",
                "Пт" => "10:00 - 20:00",
                "Сб" => "12:00 - 22:00",
                "Вс" => "12:00 - 20:00"
            ];

            foreach ($schedule as $day => $hours) {
                echo "<div class='day'>{$day}<br>{$hours}</div>";
            }
            ?>
        </div>
    </section>

    <section id="location">
        <div class="btw">
            <h1 class="title">Расположение</h1>
            <p>Мы всегда рады видеть вас. Вот как нас найти:</p>
        </div>
        <div id="location-container">
            <div id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35916.73019720984!2d37.56771414077835!3d55.762052202036685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bfe86627aed%3A0xbb33f94a54d1a794!2sStarbucks!5e0!3m2!1sru!2sru!4v1703263137381!5m2!1sru!2sru"
                    width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="address">
                <h2>Наш адрес</h2>
                <p>пр-т Мира, 119 строение 23, Москва, 129223</p>
                <p>Телефон: +7 (123) 456-7890</p>
                <p>Email: info@talltales.ru</p>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>

</body>
</html>
