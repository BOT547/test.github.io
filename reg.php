<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Аниме Word</title>
    <link rel="stylesheet" href="css/reg.css">
</head>
<body>
    <div class="registration-container">
        <h1>Регистрация</h1>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Имя пользователя</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Электронная почта</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-button">Зарегистрироваться</button>
        </form>
        <div class="login-link">
            Уже есть аккаунт? <a href="login.php">Войти</a>
        </div>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Здесь можно подключиться к базе данных и сохранить пользователя
    // Например:
    // $conn = new mysqli('localhost', 'root', '', 'anime_site');
    // if ($conn->connect_error) {
    //     die("Ошибка подключения: " . $conn->connect_error);
    // }
    // $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    // $stmt->bind_param('sss', $username, $email, $password);
    // $stmt->execute();
    // $stmt->close();
    // $conn->close();

    echo "<p>Регистрация успешна!</p>";
}
?>
