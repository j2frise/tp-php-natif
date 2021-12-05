<?php

namespace App;

class UserInfo
{
    public static function current()
    {
        if (isset($_SESSION['userhetic'])) {
            Database::query("SELECT * FROM users WHERE id = :id");
            Database::bind(':id', base64_decode($_SESSION['userhetic']));

            return Database::fetch();
        }
        return null;
    }

    public static function info($id)
    {
        Database::query("SELECT * FROM users WHERE id = :id");
        Database::bind(':id', $id);

        return Database::fetch();
    }
}
