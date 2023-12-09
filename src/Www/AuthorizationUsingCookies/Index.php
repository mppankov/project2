<?php

use Pr2\Www\AuthorizationUsingCookies\Auth;

class Index
{
//require __DIR__ . '/Auth.php';
public Auth $auth;
}
$login = $this->auth->getUserLogin();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="http://myproject.com/project2/src/Www/AuthorizationUsingCookies/Login.php">Авторизуйтесь</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="http://myproject.com/project2/src/Www/AuthorizationUsingCookies/Logout.php">Выйти</a>
<?php  endif; ?>
</body>
</html>