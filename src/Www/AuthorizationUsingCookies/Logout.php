<?php

namespace Pr2\Www\AuthorizationUsingCookies;

class Logout
{
    public function out(): void
    {
setcookie('login', '', -10, '/');
setcookie('password', '', -10, '/');
header('Location: http://myproject.com/project2/src/Www/AuthorizationUsingCookies/Index.php');
    }
}