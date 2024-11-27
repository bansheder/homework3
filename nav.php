
    <style>
        .header-line {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #4b2e2b; 
            margin-bottom: 20px;
            border-radius: 0 0 30px 30px; 
        }

        .header-buttons {
            display: flex;
            align-items: center;
        }

        .button {
            border-radius: 10px;
            color: #f5f0e6; 
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            margin: 0 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: #d4a373;  
            color: #4b2e2b; 
        }

        h1 {
            color: #f5f0e6; 
            font-size: 24px;
            font-weight: 500;
            transition: color 0.3s;
            
        }

        h1:hover {
            color: #d4a373;
        }
        a {
    text-decoration: none;
    outline: none;
}
    </style>

    <div class='header'>
        <div class='header-line'>
            <div class="header-buttons">
                <a href="../pages/about-us.php" class="button">О МАСТЕРСКОЙ</a>
                <a href="../pages/gallery.php" class="button">ГАЛЕРЕЯ ИЗДЕЛИЙ</a>
                <a href="../pages/index.php"> 
                <h1>Tall Tales Workshop</h1>
            </a>
                <a href="../pages/hours.php" class="button">РЕЖИМ РАБОТЫ</a>
                <a href="../pages/social.php" class="button">КОНТАКТЫ</a>
            </div>
        </div>
    </div>

