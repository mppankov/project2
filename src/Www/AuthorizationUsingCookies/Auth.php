<?php

namespace Pr2\Www\AuthorizationUsingCookies;

use Pr2\Www\AuthorizationUsingCookies\UsersDB;

class Auth
{
    public UsersDB $usersDB;

    public function checkAuth (string $login, string $password): bool
    {
        $users = $this->usersDB->database();

         foreach ($users as $user) 
        {
            if ($user['login'] === $login
            && $user['password'] === $password
            ) {
                return true;
            }
        }
        return false;
    }

    public function getUserLogin(): ?string
    { 
        $loginFromCookie = $_COOKIE['login'] ?? '';
        $passwordFromCookie = $_COOKIE['password'] ?? '';

        if (checkAuth($loginFromCookie, $passwordFromCookie))
        {
            return $loginFromCookie;
        }
        return null;
    }
}