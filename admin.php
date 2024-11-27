<?php
session_start();

$admin_username = 'bansheder';
$admin_password = '123456';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        die("Неверный логин или пароль.");
    }
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    die("Доступ запрещен.");
}

include 'db_connection.php';
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");

echo "<div class='contact-container'><h1>Сообщения от пользователей</h1>";
while ($row = $result->fetch_assoc()) {
    echo "<div class='message-box'>";
    echo "<h2 class='message-title'>" . htmlspecialchars($row['name']) . " (" . htmlspecialchars($row['email']) . ")</h2>";
    echo "<p class='message-content'>" . htmlspecialchars($row['message']) . "</p>";
    echo "<small class='message-time'>Отправлено: " . $row['created_at'] . "</small>";
    echo "</div>";
}
echo "</div>";

echo "<div class='logout-container'>";
echo "<form action='logout.php' method='post'>";
echo "<button type='submit' class='logout-button'>Выйти</button>";
echo "</form>";
echo "</div>";

$conn->close();
?>

<style>
body {
    font-family: 'Jost ', sans-serif;
    color: #333;
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    min-height: 100vh; 
    background-image: url(../images/back.png);
    background-repeat: no-repeat;
    background-size: cover;
}

.contact-container {
    width: 80%;
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-container h1 {
    text-align: center;
    color: #6f4f37; 
    font-size: 28px;
    margin-bottom: 30px;
}

.message-box {
    padding: 15px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.message-title {
    color: #6d4c41;
    font-size: 18px;
    margin-bottom: 10px;
}

.message-content {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
}

.message-time {
    font-size: 12px;
    color: #888;
    font-style: italic;
}

.logout-container {
    text-align: center;
    margin-top: 30px;
}

.logout-button {
    background-color: #6f4f37; 
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.logout-button:hover {
    background-color: #8c6e54; 
}
</style>
