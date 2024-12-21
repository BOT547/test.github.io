<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Аниме Word</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <div class="login-container">
        <h1>Вход</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Имя пользователя</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Войти</button>
        </form>
        <div class="register-link">
            Нет аккаунта? <a href="reg.php">Зарегистрироваться</a>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Подключение к базе данных
    // $conn = new mysqli('localhost', 'root', '', 'anime_site');
    // if ($conn->connect_error) {
    //     die("Ошибка подключения: " . $conn->connect_error);
    // }

    // Проверка пользователя
    // $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    // $stmt->bind_param('s', $username);
    // $stmt->execute();
    // $stmt->store_result();
    // if ($stmt->num_rows > 0) {
    //     $stmt->bind_result($hashed_password);
    //     $stmt->fetch();
    //     if (password_verify($password, $hashed_password)) {
    //         echo "<p>Добро пожаловать, $username!</p>";
    //     } else {
    //         echo "<p>Неверный пароль!</p>";
    //     }
    // } else {
    //     echo "<p>Пользователь не найден!</p>";
    // }
    // $stmt->close();
    // $conn->close();

    echo "<p>Логика проверки временно закомментирована.</p>";
}
?>
