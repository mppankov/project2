<?php

namespace Pr2\Www\AuthorizationUsingCookies;

class Logout
{
    public function out(): void
    {
setcookie('login', '', -10, '/');
setcookie('password', '', -10, '/');
header('Location: /');
    }
}
(new Logout)->out();