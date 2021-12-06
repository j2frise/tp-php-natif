<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Slider
{
    public static function index($status=null)
    {
        if(!$status){
            Database::query("SELECT * FROM slider ORDER BY createdAt DESC");
        } else {
            Database::query("SELECT * FROM slider WHERE status_slide=:status_slide ORDER BY createdAt DESC");
            Database::bind(':status_slide', $status);
        }
        return Database::fetchAll();
    }

    public static function get($id)
    {
        Database::query("SELECT * FROM slider WHERE id=:id");
        Database::bind(':id', intval($id));
        return Database::fetch();
    }

    public static function create($request)
    {
        Database::query("INSERT INTO slider (
            `title`,
            `bg`,
            `description`,
            `link`,
            `status_slide`,
            `createdAt`
        ) VALUES (:title, :bg, :description, :link, :status_slide, NOW()");
        Database::bind([
            ':title' => $request->title,
            ':bg' => $request->bg,
            ':description' => $request->description,
            ':link' => $request->link,
            ':status_slide' => intval($request->status_slide),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function update($request)
    {
        Database::query("UPDATE slider SET 
            title = :title, 
            bg = :bg, 
            description=:description, 
            link =: link,
            WHERE id = :id"
        );
        Database::bind([
            ':title' => $request->title,
            ':bg' => $request->bg,
            ':description' => $request->description,
            ':link' => $request->link,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function updateStatus($request)
    {
        Database::query("UPDATE slider SET 
            status_slide = :status_slide  
            WHERE id = :id"
        );
        Database::bind([
            ':status_slide' => $request->status_slide,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function existed($val)
    {
        Database::query("SELECT * FROM slider WHERE title = :title");
        Database::bind(':title', $val);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function existed_update($val, $id)
    {
        Database::query("SELECT * FROM slider WHERE title = :title AND id != :id");
        Database::bind([':title'=> $val, ':id'=> intval($request->id)]);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function delete($id)
    {
        Database::query("DELETE FROM slider WHERE id = :id");
        Database::bind(':id', intval($request->id));

        if (Database::execute()) return true;
        return false;
    }
}
