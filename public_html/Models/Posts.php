<?php

namespace Models;

use App\Database;
use App\Helper;
use App\UserInfo;


class Posts
{
    public static function index($status=null)
    {
        if(!$status){
            Database::query("SELECT p.*, u.email, u.userName, u.avatar, u.isAdmin, u.lastName, u.firstName 
            FROM posts p 
            INNER JOIN users u ON u.id = p.userId
            ORDER BY p.createdAt DESC");
        } else {
            Database::query("SELECT p.*, u.email, u.userName, u.avatar, u.isAdmin, u.lastName, u.firstName 
            FROM posts p 
            INNER JOIN users u ON u.id = p.userId
            WHERE p.status_posts=:status_posts 
            ORDER BY p.createdAt DESC");
            Database::bind(':status_posts', $status);
        }
        return Database::fetchAll();
    }

    public static function get($id)
    {
        Database::query("SELECT p.*, u.email, u.userName, u.avatar, u.isAdmin, u.lastName, u.firstName 
        FROM posts p 
        INNER JOIN users u ON u.id = p.userId
        WHERE p.id=:id");
        Database::bind(':id', intval($id));
        return Database::fetch();
    }

    public static function create($request)
    {
        Database::query("INSERT INTO posts (
            `title`,
            `userId`,
            `image`,
            `status_posts`,
            `createdAt`
        ) VALUES (:title, :userId, :image, :status_posts, NOW()");
        Database::bind([
            ':title' => $request->title,
            ':userId' => intval($request->userId),
            ':image' => $request->image,
            ':status_posts' => intval($request->status_posts),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function update($request)
    {
        Database::query("UPDATE posts SET 
            title = :title, 
            image = :image, 
            content=:content 
            WHERE id = :id"
        );
        Database::bind([
            ':title' => $request->title,
            ':image' => $request->image,
            ':content' => $request->content,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function updateStatus($request)
    {
        Database::query("UPDATE posts SET 
            status_posts = :status_posts  
            WHERE id = :id"
        );
        Database::bind([
            ':status_posts' => $request->status_posts,
            ':id' => intval($request->id),
        ]);

        if (Database::execute()) return true;
        return false;
    }

    public static function authorize($request)
    {
        Database::query("UPDATE users SET 
            authorizeAt = NOW() 
            WHERE id = :id"
        );

        if (Database::execute()) return true;
        return false;
    }


    public static function existed($val)
    {
        Database::query("SELECT * FROM posts WHERE title = :title");
        Database::bind(':title', $val);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function existed_update($val, $id)
    {
        Database::query("SELECT * FROM posts WHERE title = :title AND id != :id");
        Database::bind([':title'=> $val, ':id'=> $id]);

        if (!is_null(Database::fetch()) && !is_null(Database::fetch()['id'])) return true;
        return false;
    }

    public static function delete($id)
    {
        Database::query("DELETE FROM posts WHERE id = :id");
        Database::bind(':id', intval($request->id));

        if (Database::execute()) return true;
        return false;
    }
}
