<?php

namespace Pr2\www\AuthorizationUsingCookies;

use Pr2\Www\AuthorizationUsingCookies\Auth;
use Pr2\Www\AuthorizationUsingCookies\UsersDB;

require_once __DIR__.'/../../../vendor/autoload.php';

$auth = new Auth(new UsersDB);

$login = $auth->getUserLogin();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="Login.php">Авторизуйтесь</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="Logout.php">Выйти</a>
<?php  endif; ?>
</body>
</html>
