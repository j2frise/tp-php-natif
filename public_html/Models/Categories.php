<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Categories
{
    public static function index()
    {
        Database::query("SELECT * FROM categories ORDER BY libelle DESC");
        return Database::fetchAll();
    }

    public static function get($id)
    {
        Database::query("SELECT * FROM categories WHERE id=:id");
        Database::bind(':id', intval($id));
        return Database::fetch();
    }

    public static function create($request)
    {
        Database::query("INSERT INTO categories (`libelle`) VALUES (:libelle");
        Database::bind(':libelle', $request->libelle);

        if (Database::execute()) return true;
        return false;
    }

    public static function update($request)
    {
        Database::query("UPDATE categories SET 
            libelle = :libelle 
            WHERE id = :id"
        );
        Database::bind([
            ':libelle' => $request->libelle,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function existed($val)
    {
        Database::query("SELECT * FROM categories WHERE libelle = :libelle");
        Database::bind(':libelle', $val);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function existed_update($val, $id)
    {
        Database::query("SELECT * FROM categories WHERE libelle = :libelle AND id != :id");
        Database::bind([':libelle'=> $val, ':id'=> intval($request->id)]);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function delete($id)
    {
        Database::query("DELETE FROM categories WHERE id = :id");
        Database::bind(':id', intval($request->id));

        if (Database::execute()) return true;
        return false;
    }
}
