<?php

namespace Pr2\PhotoAlbum;

class Logout
{
    public function out(): void
    {
setcookie('login', '', -10, '/');
setcookie('password', '', -10, '/');
header('Location: /www/index.php');
    }
}
(new Logout)->out();