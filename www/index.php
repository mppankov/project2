<?php

namespace Pr2\PhotoAlbum;

use Pr2\PhotoAlbum\Auth;
use Pr2\PhotoAlbum\UsersDB;

require_once __DIR__.'/../vendor/autoload.php';

$auth = new Auth(new UsersDB);

$login = $auth->getUserLogin();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="/src/PhotoAlbum/Login.php">Авторизуйтесь</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="/src/PhotoAlbum/Logout.php">Выйти</a>
<?php  endif; ?>
</body>
</html>
