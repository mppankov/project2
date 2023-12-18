<?php

namespace Pr2\PhotoAlbum;

use Pr2\PhotoAlbum\UsersDB;

class Auth
{
    public UsersDB $usersDB;

    public function __construct(UsersDB $usersDB)
    {
       $this->usersDB = $usersDB;
    }

    public function checkAuth (string $login, string $password): bool
    {
        $users = $this->usersDB->getUserList();

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

        if ($this->checkAuth($loginFromCookie, $passwordFromCookie))
        {
            return $loginFromCookie;
        }
        return null;
    }
}