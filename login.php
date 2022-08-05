<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в админку</title>
</head>
<body>
    <h2>Вход в админку</h2>
    <form action="admin/admin.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Введите логин" name="login">
            <input type="text" placeholder="Введите пароль" name="password">
            <button type="submit">Вход</button>
        </div>
    </form>
</body>
</html>
