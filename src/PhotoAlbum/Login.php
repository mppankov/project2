<?php

use Pr2\PhotoAlbum\Auth;
use Pr2\PhotoAlbum\UsersDB;

require_once __DIR__.'/../../vendor/autoload.php';



if (!empty($_POST)) {

    $auth = new Auth(new UsersDB);
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    $error = null;
    $loggedIn = $auth->checkAuth($login, $password);

    

    if ($loggedIn) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /src/PhotoAlbum/Upload.php');
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>
<?php if ($error): ?>
<span style="color: red;">
       <?=$error ?>
</span>
<?php endif; ?>
<form action="/src/PhotoAlbum/Login.php" method="post">
    <label for="login">Имя пользователя: </label><input type="text" name="login" id="login">
    <br>
    <label for="password">Пароль: </label><input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>