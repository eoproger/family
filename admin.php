<?session_start();?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка</title>
</head>
<body>
    <?
    if(!empty($_SESSION['login'])){?>
       <a href="/logout.php">Выйти из админки</a>
    <?
    }else{?>
        <h3>Увас нет доступа. Нужно авторизоваться как администратор</h3>
        <a href="/login.php">На страницу авторизации</a>
        <a href="/index.php">На главную</a>
    <?
    }
    ?>

</body>
</html>

