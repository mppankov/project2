<?php

require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
<?php if ($login === null): ?>
<a href="http://myproject.com/project2/src/www/AuthorizationUsingCookies/login.php">Авторизуйтесь</a>
<?php else: ?>
Добро пожаловать, <?= $login ?>
<br>
<a href="http://myproject.com/project2/src/www/AuthorizationUsingCookies/logout.php">Выйти</a>
<?php  endif; ?>
</body>
</html>