<?php 

namespace Pr2\Www\AuthorizationUsingCookies;

class UsersDB
{
    public function getUserList(): array
    {
    return 
    [
        ['login' => 'admin', 'password' => 'P@sswOrd'],
        ['login' => 'moderator', 'password' => 'password'],
        ['login' => 'user', 'password' => '123'],
    ];
    }
}