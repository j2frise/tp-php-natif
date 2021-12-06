<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Setting
{
    
    public static function index()
    {
        Database::query("SELECT * FROM setting");
        return Database::fetchAll();
    }

    public static function get($id)
    {
        Database::query("SELECT * FROM setting WHERE id=:id");
        Database::bind(':id', intval($id));
        return Database::fetch();
    }

    public static function update($request)
    {
        Database::query("UPDATE setting SET 
            logo = :logo, 
            about = :about, 
            contact_page=:contact_page, 
            title =: title,
            WHERE id = :id"
        );
        Database::bind([
            ':logo' => $request->logo,
            ':about' => $request->about,
            ':contact_page' => $request->contact_page,
            ':title' => $request->title,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

}
