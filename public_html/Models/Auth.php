<?php

namespace Models;

use App\Database;

/**
 * Class Auth
 * @package Models
 */
class Auth
{

    public static function login($request)
    {
        $username=$request->username;
        $email=$request->username;
        Database::query("SELECT * FROM users WHERE email = :email OR userName = :username");
        Database::bind([':email'=> $email,':username'=> $username,]);

        if (!is_null(Database::fetch()) && password_verify($request->password, Database::fetch()['password'])) {
            $_SESSION['userhetic'] = base64_encode(Database::fetch()['id']);
            return true;
        }
        return false;
    }


    public static function logout()
    {
        session_destroy();
        unset($_SESSION['userhetic']);
        return true;
    }
}
