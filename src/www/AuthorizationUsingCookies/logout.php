<?php

setcookie('login', '', -10, '/');
setcookie('password', '', -10, '/');
header('Location: http://myproject.com/project2/src/www/AuthorizationUsingCookies/index.php');