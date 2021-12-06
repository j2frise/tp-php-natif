<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Users
{
    public static function index()
    {
        Database::query("SELECT * FROM users ORDER BY lastName ASC");
        return Database::fetchAll();
    }

    public static function create($request)
    {
        Database::query("INSERT INTO users (
            `email`,
            `password`,
            `isAdmin`,
            `compte`,
            `avatar`,
            `createdBy`,
            `createdAt`
        ) VALUES (:email, :password, :isAdmin, :compte, :avatar, :createdBy, NOW()");
        Database::bind([
            ':email' => $request->email,
            ':password' => password_hash($request->password, PASSWORD_DEFAULT),
            ':isAdmin' => intval($request->isAdmin),
            ':compte' => intval($request->compte),
            ':avatar' => $request->avatar,
            ':createdBy' => intval($request->createdBy),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function update($request)
    {
        Database::query("UPDATE users SET 
            userName = :userName, 
            firstName = :firstName, 
            lastName=:lastName, 
            description =: description,
            avatar=:avatar  
            WHERE id = :id"
        );
        Database::bind([
            ':userName' => $request->userName,
            ':firstName' => $request->firstName,
            ':lastName' => $request->lastName,
            ':description' => $request->description,
            ':avatar' => $request->avatar,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function updatePassword($request)
    {
        Database::query("UPDATE users SET 
            password = :password  
            WHERE id = :id"
        );
        Database::bind([
            ':password' => password_hash($request->password, PASSWORD_DEFAULT),
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function updateCompte($request)
    {
        Database::query("UPDATE users SET 
            compte = :compte,
            isAdmin = :isAdmin 
            WHERE id = :id"
        );
        Database::bind([
            ':compte' => intval($request->compte),
            ':isAdmin' => intval($request->isAdmin),
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }


    public static function existed($user)
    {
        $username=$user;
        $email=$user;
        Database::query("SELECT * FROM users WHERE email = :email OR userName = :username");
        Database::bind([':email'=> $email,':username'=> $username,]);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function existed_update($user, $id)
    {
        $username=$user;
        $email=$user;
        Database::query("SELECT * FROM users WHERE (email = :email OR userName = :username) AND id != :id");
        Database::bind([':email'=> $email,':username'=> $username, ':id'=>$id]);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function delete($id)
    {
        Database::query("DELETE FROM users WHERE id = :id");
        Database::bind(':id', intval($request->id));

        if (Database::execute()) return true;
        return false;
    }
}
