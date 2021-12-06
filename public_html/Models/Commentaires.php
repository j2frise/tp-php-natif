<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Commentaires
{
    public static function index($status=null)
    {
        if(!$status){
            Database::query("SELECT * FROM commentaires ORDER BY createdAt DESC");
        } else {
            Database::query("SELECT * FROM commentaires WHERE status_comment=:status_comment ORDER BY createdAt DESC");
            Database::bind(':status_comment', $status);
        }
        return Database::fetchAll();
    }

    public static function get($postId)
    {
        Database::query("SELECT * FROM commentaires WHERE postId=:postId");
        Database::bind(':postId', intval($postId));
        return Database::fetchAll();
    }

    public static function create($request)
    {
        Database::query("INSERT INTO commentaires (
            `author`,
            `postId`,
            `content`,
            `status_comment`,
            `createdAt`
        ) VALUES (:author, :postId, :content, :status_comment, NOW()");
        Database::bind([
            ':author' => $request->author,
            ':postId' => intval($request->postId),
            ':content' => $request->content,
            ':status_comment' => intval($request->status_comment),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function updateStatus($request)
    {
        Database::query("UPDATE commentaires SET 
            status_comment = :status_comment  
            WHERE id = :id"
        );
        Database::bind([
            ':status_comment' => $request->status_comment,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function delete($id)
    {
        Database::query("DELETE FROM commentaires WHERE id = :id");
        Database::bind(':id', intval($request->id));

        if (Database::execute()) return true;
        return false;
    }
}
